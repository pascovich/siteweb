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
		
		$statement = $db->prepare("INSERT INTO tcategorie(designation) 
			VALUES (:designation)");
		$result = $statement->execute(
			array(
				':designation'	=>	$_POST["designation"]
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
		
		$statement = $db->prepare(
			"UPDATE optionn 
			SET designation = :designation 
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':designation'	=>	$_POST["designation"],
				':id'			=>	$_POST["id_categorie"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>