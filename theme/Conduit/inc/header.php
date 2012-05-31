<!doctype html> 
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php get_page_clean_title(); ?> &lt; <?php get_site_name(); ?></title>
  <?php get_header(); ?>
  
  <meta name="robots" content="index, follow" />
  
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  
  <?php echo $themeManager->spitCSS(); ?>
  <?php echo $themeManager->spitJS(); ?>
  
</head>
<body id="<?php get_page_slug(); ?>" >
