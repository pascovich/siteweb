<?php
include('../../config/connect.php');
include('../../config/function.php');

// extract($_POST);

// 	$query=$db->prepare("INSERT INTO etudiant(nom,postnom,prenom,promotion,option,lieu,naissance) VALUES(:nom,:postnom,:prenom,:promotion,:option,:lieu,:naissance) ");
// 	$query->execute(array(
// 		':nom'	=>	$_POST["nom"],
// 		':postnom'	=>	$_POST["postnom"],
// 		':prenom'	=>	$_POST["prenom"],
// 		':promotion'	=>	$_POST["promotion"],
// 		':option'	=>	$_POST["option"],
// 		':lieu'	=>	$_POST["lieu"],
// 		':naissance'	=>	$_POST["naissance"],
// 	));
	

if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$id_login = substr(str_shuffle($set), 0, 15);
		$image = '';
		if($_FILES["fichier"]["name"] != '')
		{
			$image = upload_file();
		}
		$statement = $db->prepare("INSERT INTO toffre(datepub,datefin,titre,domaine,description,fichier) 
			VALUES (:datepub,:datefin,:titre,:domaine,:description,:fichier)");
		$result = $statement->execute(
			array(
				':datepub'	=>	$_POST["date_debut"],
				':datefin'	=>	$_POST["date_fin"],
				':titre'	=>	$_POST["titre"],
				':domaine'	=>	$_POST["domaine"],
				':description'	=>	$_POST["description"],
				':fichier'		=>	$image
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}else{
            echo 'erreur dans insertion';
        }
	}
	if($_POST["operation"] == "Edit")
	{
		$image = '';
		if($_FILES["fichier"]["name"] != '')
		{
			$image = upload_file();
		}
		else
		{
			$image = $_POST["hidden_user_image"];
		}
		$statement = $db->prepare(
			"UPDATE toffre 
			SET datepub=:datepub,datefin=:datefin,titre=:titre,domaine=:domaine,description=:description,fichier=:fichier 
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':datepub'	=>	$_POST["date_debut"],
				':datefin'	=>	$_POST["date_fin"],
				':titre'	=>	$_POST["titre"],
				':domaine'	=>	$_POST["domaine"],
				':description'	=>	$_POST["description"],
				':fichier'		=>	$image,
				':id' => $_POST['id_offre']
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>