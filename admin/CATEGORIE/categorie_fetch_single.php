<?php
include('../../config/connect.php');
include('../../config/function.php');
if(isset($_POST["id_categorie"]))
{
    $id_etudiant=$_POST["id_categorie"];
	$output = array();
	$statement = $db->prepare(
		"SELECT * FROM promotion 
		WHERE id = '".$_POST["id_categorie"]."' 
		LIMIT 1"
	);
    
    // $query2 = $db->query("SELECT * FROM etudiant where id_etudiant=".$id_etudiant);

	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["designation"] = $row["designation"];
		
	}
	echo json_encode($output);
}
?>