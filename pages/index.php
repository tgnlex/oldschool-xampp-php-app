<!doctype html>
<html lang="en">
<head>
  <title>Home</title>
  <?php include '../partials/head.php' ?>
</head>
<body>
  <header>
    <?php include '../partials/navbar.php' ?>
  </header> 
  <div id="main" class="container mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <h1>Welcome</h1>
    <h2>This is my PHP Sandbox Project</h2>
      <button _="on click increment :x then put it into #count-target"
      id="btn-counter">
        Click Here!
      </button>
      <h2><div id="count-target"></div></h2>    
      <?php include '../partials/vanishing_text.php' ?>
  </div>
<?php include '../partials/imports.php' ?>
</body>
</html>