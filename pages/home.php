<!doctype html>
<html lang="en">
<head>
  <title>Home</title>
  <?php include '../partials/global/head.php' ?>
</head>
<body>
  <header>
    <?php include '../partials/global/navbar.php' ?>
  </header> 
  <div id="main" class="container mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <?php 
    session_start();
     if (!isset($_SESSION['loggedin'])) {
      echo 'Welcome '. $_SESSION['user'] . '!'; 
     }
    ?>

    <h2>This is my PHP Sandbox Project</h2>
      <button _="on click increment :x then put it into #count-target" id="btn-counter">
        Click Here!
      </button>
      <h2><div id="count-target"></div></h2>    
      <?php include '../partials/vanishing_text.php' ?>
  </div>
<?php include '../partials/global/imports.php' ?>
</body>
</html>