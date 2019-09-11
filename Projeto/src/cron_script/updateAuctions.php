<?php
	$conn = new PDO('pgsql:host=dbm.fe.up.pt;dbname=lbaw1646', 'lbaw1646', 'iq28ms42');
	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
	try
    {    
        $sql = "UPDATE leilão SET estado = 'Terminado' WHERE now() > data_final AND estado = 'Em progresso';";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
    }
    catch (PDOException $e)
    {
		die("Oh noes! There's an error in the query!");
	}

?>
