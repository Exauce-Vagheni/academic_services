<?php 
include("../connect.php");
         $req=$connexion->prepare("SELECT exemplaire FROM services WHERE id");
         $req->execute(array($_GET['id']));
			while($res=$req->fetch()) {
                $nom=$res['exemplaire'];
                unlink("fichiers/$nom");
                $req=$connexion->prepare("DELETE FROM services WHERE id=?");
                $req->execute(array($_GET['id']));
            }

?>