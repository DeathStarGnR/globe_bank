<?php if (!isset($page_title)) { $page_title = 'Staff Area'; }?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>GBI - <?php echo $page_title; ?></title>
  <meta name="author" content="name">
  <meta name="description" content="description here">
  <meta name="keywords" content="keywords,here">
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=font1|font2|etc" type="text/css">
  <link rel="stylesheet" media="all" href= <?php echo(url_for("stylesheets/staff.css")); ?> type="text/css" />
  </head>
  <body>
    <header>  
        <h1>GBI <?php echo $page_title; ?></h1>
    </header>
    <navigation>
        <ul>
            <li><a href = <?php echo(url_for('/staff/index.php')); ?>>Menu</a></li>
        </ul>
    </navigation>