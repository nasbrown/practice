<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/simple.css" />
    <link rel="stylesheet" href="./styles/custom.css" />
    <title>Culinary Cove &bull; <?php echo $pageTitle; ?></title>
</head>
<body>
  <header class="header-with-background" style="background-image: url('<?php echo $headerImg; ?>'); ">
    <h1>Culinary Cove</h1>
    <p>Your sanctuary for exceptional flavors</p>
    <nav>
      <a href="/practice/06-restaurant/our-mission" <?= urlIs('/practice/06-restaurant/our-mission') ? 'class="active"' : '' ?>>Our mission</a>
      <a href="/practice/06-restaurant/ingredients" <?= urlIs('/practice/06-restaurant/ingredients') ? 'class="active"' : '' ?>>Ingredients</a>
      <a href="/practice/06-restaurant/menu" <?= urlIs('/practice/06-restaurant/menu') ? 'class="active"' : '' ?>>Our Menu</a>
    </nav>
  </header>

  <main>

  <h1><?= isDataAvailable($pageTitle) ?></h1>