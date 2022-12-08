
<?php
require('header.php');
?>

    
<?php
session_start();

echo '<!-- MAIN -->
<main role="main">    
 
<h1> Bienvenue '.$_SESSION["prenom"].' </h1>

 </main>'
?>


<?php require('footer.php');?>