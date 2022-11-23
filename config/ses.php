<?php 
// require '_header.php';
if(class_exists('USER')){

}else{
	class USER{
		private $db;
		public function __construct($db){
			if (!isset($_SESSION)) {
		session_start();
				}
	
			if (!isset($_SESSION['user'])) {
	
				$_SESSION['user']=array();	
			}
	$this->DB=$db;

	}
	
	public function con($user_id){
	
		$_SESSION['user'][$user_id]= $user_id;	
		$connexion=$this->DB->prepare('SELECT * FROM tusers WHERE id_user=:id_user');
	 $connexion->execute(array(
	'id_user' => $user_id
	));
	$con=$connexion->fetchAll(PDO::FETCH_OBJ);
	foreach ($con as $user ) {
	
		$_SESSION['user']['id_user']= $user->id_user;
		// $_SESSION['user']['id_user']= $user->id;
		$_SESSION['user']['username']= $user->username;
		$_SESSION['user']['password']= $user->pwd;
	}
	return true;
	
	
	}
	
	 public function decon($user_id){
		unset($_SESSION['user']);
		session_destroy();
		header('location:login.php');
	
	}
	
	
	}
}

 


 ?>