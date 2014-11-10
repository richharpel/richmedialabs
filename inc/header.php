<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Rich Media Labs | Creative Design and Development</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Rich Media Labs is a small, creative web design and development shop. We specialize in creating attractive and effective websites, apps and graphic projects.">
		<meta name="keywords" content="web design, web designer, website, design, graphic design, logo design, logos, business cards, letterhead, advertising, cms, wordpress, php, html, css">
		<meta name="author" content="http://www.richmedialabs.com">
		
		<!-- Le styles -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/colorbox.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!--[if IE 7]>
		<link rel="stylesheet" href="css/font-awesome-ie7.css">
		<![endif]-->
		
		<!-- custom font -->
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		
		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="img/favicon.gif">
		<link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon" href="img/apple-touch-icon-57-precomposed.png">
	</head>

	<body data-spy="scroll" data-target="inner-sidebar">
	
		<!-- Navbar
		================================================== -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">			
					<a class="brand" href="home"><img src="images/logo-richmedialabs.png" alt="Rich Media Labs"></a>
					<ul class="nav pull-right">
						<li class="hidden-phone hidden-tablet<? if($page=="home")echo " active";?>"><a href="home">Home</a></li>
						<li<? if($page=="about")echo " class=\"active\"";?>><a href="about">About</a></li>
						<li<? if($page=="work")echo " class=\"active\"";?>><a href="work">Work</a></li>
						<li<? if($page=="services")echo " class=\"active\"";?>><a href="services">Services</a></li>
						<li<? if($page=="contact")echo " class=\"active\"";?>><a href="contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>