
<?php
session_start();
require('header.php');
?>

<main>
  <h1 id="welcome" style="color: whitesmoke !important; text-align:center;">Bienvenue 
  <?php 
  if(isset($_SESSION["prenom"])){
    echo $_SESSION['prenom'];
  }else{
    header('Location: login.php');
  }
  ?></h1>
</main>

<?php require('footer.php');?>