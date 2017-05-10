<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title = "CSV, P5 & PHP";?></title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php if((basename($_SERVER['PHP_SELF']))=='page_1.php'){?>
<script src="js/p5.js" type="text/javascript"></script>
<script src="js/p5.dom.js" type="text/javascript"></script>
<script src="js/p5.sound.js" type="text/javascript"></script>
<script src="sketch.js" type="text/javascript"></script>
<?php };?>
</head>
<body>
<div class="site-wrapper">
<div class="site-wrapper-inner">
<div class="cover-container">
<div class="masthead clearfix">
<div class="inner">
<h1 class="masthead-brand"><?php echo $title; ?></h1>
<nav>
<ul class="nav masthead-nav">
<li<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>><a href="index.php">Portada</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='page_1.php'){?> class="active" <?php };?>><a href="page_1.php">Página con JS</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='page_2.php'){?> class="active" <?php };?>><a href="page_2.php">Página con PHP</a></li>
</ul>
</nav>
</div>
</div>
