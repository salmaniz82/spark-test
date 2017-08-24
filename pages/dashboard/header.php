<!DOCTYPE html>
<html>
<head>
    <title> Phantom MVC - <?php if(isset($data['title'])) echo $data['title']; ?></title>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel='shortcut icon' type='image/ico' href='/favicon.ico' />
	<link rel="apple-touch-icon" type='image/ico' href="/favicon.ico">
	<meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>


<header class="wrapper">

	<ul class="nav main-nav">
		<li><a href="/">Public Area</a></li>
		<li><a href="/book/add">Add Book</a></li>

		

		<?php if(Auth::User()['role_id'] == 1 ) {?>
		<li><a href="/dashboard/pages">Pages</a></li>
		<li><a href="/dashboard/products/add">Products</a></li>
		<?php }?>
	</ul>

	<ul class="nav right-nav">
		<li><a href="/logout">logout</a></li>
	</ul>

	
	<div class="clearfix"></div>
</header>