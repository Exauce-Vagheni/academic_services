<?php  
if (isset($_POST['login']) AND isset($_POST['password'])) {
	$login=htmlspecialchars($_POST['login']);
	$password=htmlspecialchars($_POST['password']);
	try
		{
			include("../connect.php");
			$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$select1=$connexion->prepare('SELECT * FROM admin WHERE login=:login AND password=:password');
		$select1->execute(array(
			'login'=>$login,
			'password'=>$password
		));
		$select2=$connexion->prepare('SELECT * FROM admin WHERE login=:login AND password=:password');
		$select2->execute(array(
			'login'=>$login,
			'password'=>$password
		));
			if ($select1->fetch()) {
				while ($result=$select2->fetch()) {
			
				$_SESSION['id_user']=$result['id_user'];
							header("location:add_services.php");
					}
			}
			else{
				echo "<p class='alert alert-danger'>Mauvais identifiants</p>";
			}
					
				
			
		}
		catch(PDOException $e)
		{
			echo 'Echec : '.$e->getMessage();
		}

			}

 ?>