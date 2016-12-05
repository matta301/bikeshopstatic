<?php

	$imageAlt = 'Bikeshopcompare.com';

	
	require_once("functions.php");



?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<title><?php echo $pageTitle; ?></title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 	
	<!-- <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.red-blue.min.css" /> -->
	<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.red-light_green.min.css" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body class="<?php echo $pageClass; ?>">

	<!-- Always shows a header, even in smaller screens. -->
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header">
	    	<div class="mdl-layout__header-row">
		    	<a class="logo-link" href="index.php">
	      			<img class="logo" src="images/logo.png" alt="bicycle shop comparison logo" />
	      		</a>

		      	<!-- Add spacer, to align navigation to the right -->
		      	<div class="mdl-layout-spacer"></div>
		      	<!-- Navigation. We hide it in small screens. -->
		      	<nav class="mdl-navigation mdl-layout--large-screen-only">
			        <a class="mdl-navigation__link" href="index.php">Home</a>
			        <a class="mdl-navigation__link" href="">Shops</a>
			        <a class="mdl-navigation__link" href="about.php">About</a>
			        <a class="mdl-navigation__link" href="contact.php">Contact</a>
		      	</nav>
		    </div>
	  	</header>

		<div class="mdl-layout__drawer mdl-layout--small-screen-only">
			<span class="mdl-layout-title">Title</span>
			<nav class="mdl-navigation">
				<a class="mdl-navigation__link" href="index.php">Home</a>
				<a class="mdl-navigation__link" href="">Shops</a>
				<a class="mdl-navigation__link" href="">About</a>
				<a class="mdl-navigation__link" href="">Contact</a>
			</nav>
		</div>
		
		<main class="mdl-layout__content">
	    	<div class="page-content">