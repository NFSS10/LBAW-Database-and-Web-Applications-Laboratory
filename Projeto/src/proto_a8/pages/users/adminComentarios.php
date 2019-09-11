<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'database/users.php');
	
	
	if(isset($_SESSION['username']))
	{
		$username = $_SESSION['username'];
		try 
		{
			$session_id = getUser($username)['idutilizador'];
			$isAdmin = isAdminBool($session_id);
		} 
		catch (PDOException $e) 
		{
			die($e->getMessage());
		}
		if($isAdmin)
		{
			try 
			{
				$comments = getAllComments();
				$idLeilaoKey;
				$questaoKey;
				$idQuestaoKey;
				$i=0;
				foreach($comments[0] as $key => $value)
				{
					if($i==2)
					{
						$idLeilaoKey=$key;
						break;
					}
					if($i==1)
					{
						$questaoKey=$key;
					}
					if($i==0)
					{
						$idQuestaoKey=$key;
					}
					$i=$i+1;
				}
				foreach($comments as &$comment)
				{
					$comment['respostas'] = getRespostas($comment[$idQuestaoKey]);
					$comment['nRespostas']= count($comment['respostas']);

				}
					
			} 
			catch (PDOException $e) 
			{
			die($e->getMessage());
			}
			
			$smarty->assign('IdQuestaoKey', $idQuestaoKey);
			$smarty->assign('LeilaoKey', $idLeilaoKey);
			$smarty->assign('QuestaoKey', $questaoKey);
			$smarty->assign('Comments', $comments);
			$smarty->display('users/adminComentarios.tpl');
		}
		else
		{
			$_SESSION['error_messages'][] = "Não tens permissão para aceder!";
			header("Location:	$BASE_URL");
			die;
		}
		
	}
	else
	{
		 $_SESSION['error_messages'][] = "Não tens permissão para aceder!";
		 header("Location:	$BASE_URL");
		 die;
	}
?>