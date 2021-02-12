<?php
session_start();

$username1 = "fardi";
$password1 = "1234";
if(isset($_POST["submit"])){
$username = $_POST["username"];
$password = $_POST["password"];
if ($username && $password){
if($username==$username1&&$password==$password1){
$_SESSION["username"] = $username;
header("Location:admin.php");


}

else{
    echo "les informations sont fausses";
}
}
}


?>


<link rel="stylesheet" href="../style/bootstrap.css" type="text/css"/>
<h1> Administration - Connexion </h1>

<form action="", method="Post">
<h3> identifiant </h3><input type="text" , name="username"/><br/><br>
<h3> mot de passe </h3><input type="password" , name="password"/><br/><br>
<input type="submit" , name="submit"/><br/><br>


</form>
