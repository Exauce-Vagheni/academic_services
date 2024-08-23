<?php 
include("../connect.php");
if(isset($_POST['designation']) AND isset($_POST['description']) AND isset($_POST['modif']) AND isset($_GET['id'])) {
         $req=$connexion->prepare("UPDATE services SET designation=?,description=? WHERE id=?");
			$req->execute(array(htmlspecialchars($_POST['designation']),htmlspecialchars($_POST['description']),htmlspecialchars($_GET['id'])));
			header("location:list_services.php");
    }
?>