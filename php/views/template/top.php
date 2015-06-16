<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8" />
  <?php
		ocloset("title",$title);
  ?>
  <link rel="icon" type="image/png" href="res/favicon.png" />
  <meta name="viewport" content="initial-scale=1,width=device-width" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
  <?php
  	addmycss();
  ?>
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400&amp;subset=latin-ext,latin" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="css/login.css" />
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
	<script>
		var redurl="<?php echo get("url"); ?>";
		var cururl=window.location.href;
	</script>
 </head>
<body style="overflow-y:scroll;" >
