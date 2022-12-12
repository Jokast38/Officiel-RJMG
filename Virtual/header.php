<?php require('../Login_v18/PDO.php')?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RJMG Market</title>
    <link rel="icon" type="image/png" href="./img/fav/logo_rjmgf.png"/>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="css/lightcase.css">
    
    <!-- CUSTOM STYLE -->      
    <link rel="stylesheet" href="css/template-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>   
  </head>

  <body class="size-1280">
    <!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="message.php" style="position:fixed;bottom:120px;right:-6px;z-index:10;"><img src="img/chat1.png" alt=""></a>
    <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-primary-dott full-width sticky">          
        <!-- mobile version logo -->              
        <div class="logo hide-l hide-xl hide-xxl">
           <a href="index.html" class="logo">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="img/logo-dark.svg" alt="">
          </a>
        </div>
        
        <div class="top-nav"> 

          <!-- left menu items -->
          <div class="top-nav left-menu">
             <ul class="right top-ul chevron">
                <li> <div>
            <button type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="sr-only">Open user menu</span>
              <img id="defuser" src="../Virtual/img/user.png" alt="">
            </button>
          </div></li>
                <li><a href="espace.php">Mon Espace</a></li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorie<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Immobilier</a></li>
                <li class="divider"></li>
                <li><a href="#">Véhicules</a></li>
                <li class="divider"></li>
                <li><a href="#">Vacances</a></li>
                <li class="divider"></li>
                <li><a href="#">Emploi</a></li>
                <li class="divider"></li>
                <li><a href="#">Mode</a></</li>
                <li class="divider"></li>
                <li><a href="#">Maison</a></</li>
                <li class="divider"></li>
                <li><a href="#">Multimédia</a></</li>
                <li class="divider"></li>
                <li><a href="#">Loisirs</a></</li>
                <li class="divider"></li>
                <li><a href="#">Matériels Professionel</a></</li>
                <li class="divider"></li>
                <li><a href="#">Autres</a></</li>
             </ul>
          </div>
          
          <!-- logo -->
          <ul class="logo-menu">
            <a href="indexh.php" class="logo">
              <!-- Logo White Version -->
              <img class="logo-white" src="img/logo_rjmg.png" alt="">
              <!-- Logo Dark Version -->
              <img class="logo-dark" src="img/logo_rjmg.png" alt="">
            </a>
          </ul>
          
          <!-- right menu items -->
          <div class="top-nav right-menu">
             <ul class="top-ul chevron">
                <li><a href="panier.php">Panier</a></li>
                <li><a href="favoris.php">Favoris</a></li>
                <li><a href="contact.php">Contact</a></li>
             </ul> 
                
          </div>
        </div>
      </nav>
    </header>
    
    <form class="form-wrapper cf">
  	<input type="text" placeholder="Rechercher..." required>
	  <button type="submit">Search</button>
    </form>