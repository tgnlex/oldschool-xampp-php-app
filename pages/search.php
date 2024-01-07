<html>
<head>
<?php include '../partials/global/head.php' ?>
</head>
<body>
<?php include '../partials/global/navbar.php' ?>
<h3>
    Search Users
<span class="htmx-indicator">Searching...</span>
</h3>
<input id="search-users" 
      class="form-control" type="search"
       name="search" placeholder="Begin Typing to search Users..."
       hx-post="../partials/data/users.php"
       hx-trigger="keyup changed delay:500ms, search"
       hx-target="#search-results"
       hx-indicator=".htmx-indicator">

<table class="table">
    <thead>
    <tr>
    <th>Username</th>
    <th>Email>
    </tr>
    </thead>
    <tbody id="search-results"></tbody>
</table>
<?php include '../partials/global/imports.php' ?>
</body>
</html>