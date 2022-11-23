<?php

function upload_image()
{
	if(isset($_FILES["photo"]))
	{
		$extension = explode('.', $_FILES['photo']['name']);
		$new_name = rand() . '.' . $extension[1];
		$destination = '../../media/images/' . $new_name;
		move_uploaded_file($_FILES['photo']['tmp_name'], $destination);
		return $new_name;
	}
}
function upload_file()
{
	if(isset($_FILES["fichier"]))
	{
		$extension = explode('.', $_FILES['fichier']['name']);
		$new_name = rand() . '.' . $extension[1];
		$destination = '../../media/fichier/' . $new_name;
		move_uploaded_file($_FILES['fichier']['tmp_name'], $destination);
		return $new_name;
	}
}

function get_image_name($etudiant_id)
{
	include('../../config/connect.php');
	$statement = $db->prepare("SELECT photo FROM etudiant WHERE id_etudiant = '$etudiant_id'");
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row["photo"];
	}
}

function get_total_all_records()
{
	include('../../config/connect.php');
	$statement = $db->prepare("SELECT * FROM etudiant");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}


?>