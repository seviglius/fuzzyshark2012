<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fuzzyshark
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<title>SCCA 2012</title>

<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />

<link rel="stylesheet" href="http://f.fontdeck.com/s/css/BYIdloiyr75z6gbZBPq6eYPYeJQ/www.2012.sccaportfolioshow.com/18201.css" type="text/css" />
<link rel="stylesheet" href="http://f.fontdeck.com/s/css/BYIdloiyr75z6gbZBPq6eYPYeJQ/2012.sccaportfolioshow.com/18201.css" type="text/css" />
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<?php wp_head(); ?>
</head>


<header class="header" id="absolute">
<img id="rule" src="img/headerrule.png" width="890" height="50">
<a id="flag"><img src="img/blackgif.gif" width="40" height="40"></a>
<ul>
<li><a href="/">Home</a></li>
<li><a href="program.php">Program</a></li>
<li id="spacer">&nbsp;</li>
<li><a id="attend" href="students.php">Students</a></li>
<li><a href="event.php">Attend</a></li>
</ul>

 </header>

<body <?php body_class(); ?>>