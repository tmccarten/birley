<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <?php $cssVersion = "42" ?>

  <title><?php echo $pageTitle; ?></title>

  <meta name="description" content="<?php echo $pageDescription; ?>">
  <meta name="keywords" content="<?php echo $pageKeywords; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

  <link href="<?php echo $assets?>/css/fonts.css?v=<?php echo $cssVersion?>" rel="stylesheet">

  <meta name="robots" content="noindex,nofollow"/>

  <link rel="stylesheet" href="<?php echo $assets; ?>/css/normalize.css">

  <link rel="stylesheet" href="<?php echo $assets; ?>/css/style.css?v=<?php echo $cssVersion?>">
  <link rel="stylesheet" href="<?php echo $assets; ?>/css/icons.data.svg.css?v=<?php echo $cssVersion?>">

  <link rel="shortcut icon" href="<?php echo $favIcon; ?>" type="image/x-icon">
  <link rel="icon" href="<?php echo $favIcon; ?>" type="image/x-icon">

  <script src="<?php echo $assets; ?>/../bower_components/jquery/dist/jquery.min.js"></script>

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
