<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Webpage</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark shadow">
    <div class="container">
        <a href="action.php?page=home" class="navbar-brand">Logo</a>
        <ul class="navbar-nav">
            <li><a href="action.php?page=home" class="nav-link">Home</a></li>
            <?php foreach ($categories as $category) { ?>
            <li><a href="action.php?page=category&id=<?php echo $category['id'] ?>" class="nav-link"><?php echo $category['name'] ?></a></li>
            <?php } ?>
            <li><a href="action.php?page=login" class="nav-link">Login</a></li>
        </ul>
    </div>
</nav>