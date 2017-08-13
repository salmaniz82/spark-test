<!DOCTYPE html>
<html>
<head>
    <title> IGNITE MVC - <?php if(isset($data['title'])) echo $data['title']; ?></title>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel='shortcut icon' type='image/png' href='/favicon.png' />
    <link rel="apple-touch-icon" type='image/png' href="/favicon.png">
</head>
<body>


<header class="wrapper">

	<ul class="nav main-nav">
		<li><a href="/">Home</a></li>
		<li><a href="/products">Product</a></li>
		<li><a href="/services">Services</a></li>
		<li><a href="/books">Books</a></li>
		<li><a href="/todos">Todos</a></li>
		<li><a href="/todospa">Todos - SPA</a></li>
		<li><a href="/contact">Contact</a></li>
	</ul>

	<ul class="nav right-nav">

	
	

	<?php if(!Auth::loginStatus() ) { ?>

			<li><a href="/login">Login</a></li>
			<li><a href="/register">Signup</a></li>

		<?php 
			
		} else { ?>
			<li>Welcome, <?= Auth::User()['name']; ?></li>
			<li><a href="/profile">Profile</a></li>
			<li><a href="/dashboard">Dashboard</a></li>
			<li><a href="/logout">Logout</a></li>

<?php  }?>
			
			
			
	</ul>
	<div class="clearfix"></div>
</header>