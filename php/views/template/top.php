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
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
	<script>
		var redurl="<?php echo get("url"); ?>";
		var cururl=window.location.href;
	</script>
 </head>
<body style="overflow-y:scroll;" >
