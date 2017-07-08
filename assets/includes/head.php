<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php echo $pageTitle; ?></title>

  <meta name="description" content="<?php echo $pageDescription; ?>">
  <meta name="keywords" content="<?php echo $pageKeywords; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <meta name="robots" content="noindex,nofollow"/>

  <?php $cssVersion = "8" ?>

  <link rel="stylesheet" href="<?php echo $css; ?>normalize.css">
  <link rel="stylesheet" href="bower_components/jQuery-ui-Slider-Pips/dist/jquery-ui-slider-pips.css">
  <link rel="stylesheet" href="<?php echo $css; ?>style.css?v=<?php echo date('his'); ?>">

  <link rel="shortcut icon" href="<?php echo $favIcon; ?>" type="image/x-icon">
  <link rel="icon" href="<?php echo $favIcon; ?>" type="image/x-icon">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
