<?php

include_once('../../config/init.php');
include_once($BASE_DIR . 'database/users.php');


if(!isset($_SESSION['username']))
{
    $smarty->assign('UserLoggedIn', false);
    $_SESSION['error_messages'][] = "Tens de estar logado para poder editar o perfil";
    header("Location:	$BASE_URL");
    die;
}
else
{
    $username = $_SESSION['username'];
    if( $username != $_POST["usernameconf"]) //verifica se a informacao do perfil do enviada é de quem esta logado
    {
        $smarty->assign('UserLoggedIn', false);
        $_SESSION['error_messages'][] = "Tens de estar logado para poder editar o perfil";
        header("Location:	$BASE_URL");
        die;
    }
    else
    {
        $smarty->assign('UserLoggedIn', true);
    }

    $user_id = getUser($username)['idutilizador'];

    $nome = $_POST["nome"];
    $pais = $_POST["paisselected"];
    $genero = $_POST["genero"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordconf = $_POST["passwordconf"];
    $foto = $_POST["imgsrc"];




    if($password == $passwordconf)
    {
        if(strlen($password) > 0) //escreveu algo na password por isso atualiza-la tbm
        {
            if(strlen($password) < 8) //palavra pass pequena
            {
                $_SESSION['error_messages'][] = "Palavra Pass demasiado pequena. Insira no mínimo 8 caracteres";
                header("Location:	$BASE_URL" . "pages/users/profile-edit.php");
                die;
            }
            else
            {
                try
                {
                    updatePassword(password_hash($password, PASSWORD_BCRYPT), $user_id);

                } catch (PDOException $e) {
                    die($e->getMessage());
                }

            }
        }


        if(isset($_FILES['imgfile'])) //se enviou alguma imagem
		{
			try {
				//atualizar a informacao
				$foto = changeImagem($_FILES['imgfile'], $user_id);
			} catch (PDOException $e) {
				die($e->getMessage());
			}
		}

        try
        {
            //atualizar a informacao
            updateUserInfo($nome, $email, $pais, $foto, $genero, $user_id);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        $_SESSION['success_messages'][] = "Alterações guardadas com sucesso !";
        header("Location:	$BASE_URL" . "pages/users/profile-edit.php");
        die;
    }
    else
    {
        $_SESSION['error_messages'][] = "\"Password\" e \"Confirm Password\" não são iguais";
        header("Location:	$BASE_URL" . "pages/users/profile-edit.php");
        die;
    }


}


function changeImagem($img_file, $user_id)
{
    global $BASE_DIR;

	$target_dir = $BASE_DIR . "resources/users/";
    if (!file_exists($target_dir))
        mkdir($target_dir, 0777, true);

    $target_file = $target_dir . $user_id;   //$_FILES['user_image']['name']);

    $maxDimW = 256;
    $maxDimH = 256;

    list($width, $height, $type, $attr) = getimagesize($img_file['tmp_name']);

    if ($target_file != $target_dir && $img_file["size"] < 1000000 && ($width > $maxDimW || $height > $maxDimH)) {
        $target_filename = $img_file['tmp_name'];
        $size = getimagesize($target_filename);
        $ratio = $size[0] / $size[1];

        if ($ratio > 1) {
            $width = $maxDimW;
            $height = $maxDimH / $ratio;
        } else {
            $width = $maxDimW * $ratio;
            $height = $maxDimH;
        }

        $src = imagecreatefromstring(file_get_contents($target_filename));
        $dst = imagecreatetruecolor($width, $height);
        imagecopyresampled($dst, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1]);

        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		$extension = ".png";
		if($imageFileType == "jpg")
		{
			imagejpeg($dst, $target_filename);
			$extension = ".jpg";
		}
		else
			imagepng($dst, $target_filename);

		$pathToPhoto = $target_dir . $user_id . $extension;

        if (file_exists($pathToPhoto))
            unlink($pathToPhoto);

        if(move_uploaded_file($img_file['tmp_name'], $pathToPhoto))
        {
			$photo_real_path = "resources/users/" . $user_id . $extension;
            updateUserPhoto($photo_real_path, $user_id);
            return $target_file;
        }
        else{
            $_SESSION['error_messages'][] = "Imagem não foi adicionada com sucesso.";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            die;
        }

    }

}



?>
