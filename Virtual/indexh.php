
<?php
session_start();
require('header.php');
?>

<main>
  <h1 id="welcome" style="color: whitesmoke !important; text-align:center;">Bienvenue 
  <?php 
  echo $_SESSION['prenom'];
  ?></h1>
</main>

<?php require('footer.php');?>