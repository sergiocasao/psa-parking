<?php 

$user = $_POST['email'];
$pass = $_POST['password'];
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/

if($user=="ceo@joffyholdings.com"){
	$_SESSION["userEmail"]="ceo@joffyholdings.com";
	$_SESSION["userName"]="Hector Fernandez Ovalle";
	header('Location: index2.php');
	exit;
}elseif ($user=="admin.a@psa.joffyholdings.com") {
	$_SESSION["userEmail"]="admin.a@psa.joffyholdings.com";
	$_SESSION["userName"]="Administrador Torre A";
	header('Location: index2.php');
	exit;
}elseif($user=="admin.b@psa.joffyholdings.com"){
	$_SESSION["userEmail"]="admin.b@psa.joffyholdings.com";
	$_SESSION["userName"]="Administrador Torre B";
	header('Location: index2.php');
	exit;
}elseif ($user=="admin.c@psa.joffyholdings.com") {
	$_SESSION["userEmail"]="admin.c@psa.joffyholdings.com";
	$_SESSION["userName"]="Administrador Torre C";
	header('Location: index2.php');
	exit;
}else{
	header('Location: login.php?err=0');
	exit;
}

?>