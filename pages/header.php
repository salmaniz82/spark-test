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
		<li class="<?php Route::Current('/') ?>"><a href="/">Home</a></li>
		<li class="<?php Route::Current('/products') ?>"><a href="/products">Product</a></li>
		<li class="<?php Route::Current('/services') ?>"><a href="/services">Services</a></li>
		<li class="<?php Route::Current('/contact') ?>"><a href="/contact">Contact</a></li>
		<li class="<?php Route::Current('/books') ?>"><a href="/books">Books</a></li>
		<li class="<?php Route::Current('/todos') ?>"><a href="/todos">Todos</a></li>
		<li class="<?php Route::Current('/todospa') ?>"><a href="/todospa">Todos - AngularJS</a></li>
	</ul>

	<ul class="nav right-nav">

	
	

	<?php if(!Auth::loginStatus() ) { ?>

			<li class="<?php Route::Current('/login') ?>"><a href="/login">Login</a></li>
			<li class="<?php Route::Current('/register') ?>"><a href="/register">Signup</a></li>

		<?php 
			
		} else { ?>
			<li class="userinfo">Welcome, <?= Auth::User()['name']; ?></li>
			<li class="<?php Route::Current('/profile') ?>"><a href="/profile">Profile</a></li>
			<li class="<?php Route::Current('/dashboard') ?>"><a href="/dashboard">Dashboard</a></li>
			<li class="<?php Route::Current('/logout') ?>"><a href="/logout">Logout</a></li>

<?php  }?>
			
			
			
	</ul>
	<div class="clearfix"></div>
</header>