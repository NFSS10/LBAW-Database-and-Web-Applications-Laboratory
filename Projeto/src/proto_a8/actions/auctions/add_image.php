<?php
include_once ('../../config/init.php');
include_once ($BASE_DIR . 'database/auctions.php');

if(isset($_SESSION['username'])) {

    $username = $_SESSION['username'];
    if (!isset($_GET['id']) || $_SERVER["REQUEST_METHOD"] != "POST") {
        $smarty->display('common/notFound.tpl');
    } else {

        $auction_id = trim($_GET['id']);

        $target_dir = $BASE_DIR . "resources/products/". $auction_id . "/";

        if (!file_exists($target_dir))
            mkdir($target_dir, 0777, true);

        $target_file = $target_dir . basename($_FILES['product_image']['name']);

        $maxDimW = 320;
        $maxDimH = 200;

        list($width, $height, $type, $attr) = getimagesize($_FILES["product_image"]['tmp_name']);

        if ($target_file != $target_dir && $_FILES["product_image"]["size"] < 1000000 && ($width > $maxDimW || $height > $maxDimH)) {
            $target_filename = $_FILES["product_image"]['tmp_name'];
            $size = getimagesize($target_filename);

            $src = imagecreatefromstring(file_get_contents($target_filename));
            $dst = imagecreatetruecolor($maxDimW, $maxDimH);
            imagecopyresampled($dst, $src, 0, 0, 0, 0, $maxDimW, $maxDimH, $size[0], $size[1]);

            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

            $extension = ".png";
            if($imageFileType == "jpg")
            {
                imagejpeg($dst, $target_filename);
                $extension = ".jpg";
            }
            else
                imagepng($dst, $target_filename);

            $photo_number = count(getAuctionPhotos($auction_id));
            $pathToPhoto = $target_dir . $photo_number . $extension;

            $photo_real_path = "resources/products/". $auction_id . "/" . $photo_number . $extension;

            if (file_exists($pathToPhoto))
                unlink($pathToPhoto);

            if(move_uploaded_file($_FILES['product_image']['tmp_name'], $pathToPhoto))
            {
                addPhoto($auction_id, $photo_real_path);

                $_SESSION['success_messages'][] = "Imagem adicionada com sucesso!";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                die;
            }
            else{
                $_SESSION['error_messages'][] = "Imagem não foi adicionada com sucesso.";
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                die;
            }

        }
        else
        {
            $_SESSION['error_messages'][] = "Imagem demasiado grande!";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            die;
        }
    }
}
else
{
    $_SESSION['error_messages'][] = "Não tens permissão para aceder a esta página!";
    header("Location:	$BASE_URL");
    die;
}