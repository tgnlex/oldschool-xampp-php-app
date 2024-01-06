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
 <main>
    <div id="main" class="container mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <h1>Welcome</h1>
      <h2>This is my PHP Sandbox Project</h2>
      <div id="vanishing-text"
      _="on load wait 5s then transition opacity to 0 then remove me"
      >
        <h6>Warning:</h6>
        <p>This message was written in disappearing Ink
      </div>
    </div>
  </main>
</div>
<?php include '../partials/imports.php' ?>
</body>
</html>