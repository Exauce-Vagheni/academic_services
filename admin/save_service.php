<?php 
include("../connect.php");
if(isset($_POST['designation']) AND isset($_POST['description']) AND isset($_FILES['exemplaire'])) {
	$size=$_FILES['exemplaire']['size'];
	$tmp_name=$_FILES['exemplaire']['tmp_name'];
	$name=$_FILES['exemplaire']['name'];
    $name_save=sha1($_POST['designation'])."".$name;

			 if($size<=10000000000){
            $infofichier=pathinfo($name);
            $ext_upload="";
            if(isset($infofichier['extension'])){
            	$ext_upload=$infofichier['extension'];
            }
            
            $ext_auto=array('pdf','docx','txt');
        if(in_array($ext_upload,$ext_auto)){
        if(move_uploaded_file($tmp_name,'fichiers/'.basename($name_save))){
         $req=$connexion->prepare("INSERT INTO services(designation,description,exemplaire) VALUES(?,?,?)");
			$req->execute(array(htmlspecialchars($_POST['designation']),htmlspecialchars($_POST['description']),$name_save));
			header("location:list_services.php");

        }
    }
}

}else{
	echo "Veuillez entrer toutes les informations";
}


?>