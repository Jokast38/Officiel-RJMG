<?php
session_start();
require('PDO.php');

if (isset($_POST['sign'])) {
    $prenom = $_POST["prenom"];
    $nom = $_POST["name"];
    $adress = $_POST["add"] . " " . $_POST["add2"] . " " . $_POST["city"] . " " . $_POST["zip"];
    $email = $_POST["email2"];
    $tel = $_POST["tel"];
    $pass1 = $_POST["pass"];
    $pass2 = $_POST["pass2"];
    if($pass1 == $pass2){

       $sql = "INSERT INTO `connexion`(`nom`, `prenom`, `adresse`, `mdp`, `mail`, `tel`) VALUES ('$nom', '$prenom', '$address', '$pass1', '$email', '$tel')";
        $stmt = $db->prepare($sql);
        $stmt->execute();

        $_SESSION['prenom']=$prenom;
        echo "Bienvenue ".$prenom;
        header('Location: ../Virtual/indexh.php');

    }else{
        echo "Les mots de passe ne sont pas identique";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="../../Officiel RJMG/Virtual/img/fav/logo_rjmgf.png"/>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Mon Inscription</title>
</head>
<body style="background-color: #666666;">
<header>
    <span class="login100-form-title p-b-43" style="color: white;">
						Mon Inscription
	</span>
</header>
 
<form class="login100-form " style="width: 65%; margin:auto;" method="post">
<div class="col-md-12 row">
   <div class="col-md-6"> 
    <label  for="prenom " class="form-label">Prenom</label>
    <input name="prenom" type="text" class="form-control" id="prenom" required>
   </div>
   <div class="col-md-6">
    <label method="post" for="name" class="form-label">Nom</label>
    <input name="name" type="text" class="form-control" id="name">
   </div>
</div>
<div class="col-md-12 row">
    <div class="col-md-6">
      <label  for="email" class="form-label">Email</label>
      <input name="email2" type="email" class="form-control" id="email">
    </div>
    <div class="col-md-6">
      <label  for="tel" class="form-label">Tel</label>
      <input name="tel" type="phone" class="form-control" id="tel">
    </div>
</div>
  
  <div class="col-md-6">
    <label for="pass"  class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="pass"  required>
  </div>
  <div class="col-md-6">
    <label for="pass2" class="form-label">Confirmez Password</label>
    <input type="password" name="pass2" class="form-control" id="pass2"  required>
  </div>
  <div class="col-12">
    <label for="add" class="form-label">Address</label>
    <input type="text" name="add" class="form-control" id="add" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="add2" class="form-label">Address 2</label>
    <input type="text" name="add2" class="form-control" id="add2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="city" class="form-label">City</label>
    <input type="text" name="city" class="form-control" id="city">
  </div>
  <div class="col-md-2">
    <label for="zip" class="form-label">CP</label>
    <input type="text" name="zip" class="form-control" id="zip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-6" style="margin: auto;">
    <button name="sign" type="submit" class="btn btn-primary center"><a href="../../Virtual/indexh.php"></a> Sign in</button>
  </div>
</form>
</body>
</html>