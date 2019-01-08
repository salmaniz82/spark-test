<!DOCTYPE html>
<?php $lang = lang();

 ?>
<html>
<head>

    <title> Phantom MVC - <?php if(isset($data['title'])) echo $data['title']; ?></title>
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel='shortcut icon' type='image/ico' href='/favicon.ico' />
	<link rel="apple-touch-icon" type='image/ico' href="/favicon.ico">
</head>
<body>

<header class="wrapper">
	<div class="branding">
		<div id="logo">Flex MVC</div>
		<div class="menu-icon">
			<img src="/assets/images/menu.svg">
		</div>
	</div>

	<div class="fix-spacer">&nbsp</div>
	<div class="mobile-toggle-wrap">
	<ul class="nav main-nav">
		<li class="<?php Route::Current('/') ?>"><a href="/"><?= $lang->df('home') ?></a></li>
		<li class="<?php Route::Current('/products') ?>"><a href="/products"><?= $lang->df('products') ?></a></li>
		<li class="<?php Route::Current('/services') ?>"><a href="/services">Services</a></li>
		<li class="<?php Route::Current('/contact') ?>"><a href="/contact">Contact</a></li>
		<li class="<?php Route::Current('/books') ?>"><a href="/books">Books</a></li>
		<li class="<?php Route::Current('/shop'); if(isset(Route::$params['category_id'])) { Route::Current('/shop/'.Route::$params['category_id']); }?>"><a href="/shop">Shop</a></li>
		<li class="<?php Route::Current('/todos') ?>"><a href="/todos">Todos</a></li>
		<li class="<?php Route::Current('/todospa') ?>"><a href="/todospa">Todos - AngularJS</a></li>
	</ul>
	<ul class="nav right-nav">
				<li class="lang-switch">
					<a href="/switchLang">
						<?= ($lang->lang == 'en') ? 'English' : 'Arabic' ?></li>
					</a>
				<span class="nav-cart-count">0</span>
				<li id="header-cart" class="<?php Route::Current('/cart-details') ?>"><a href="/cart-details"> Cart </a> </span></li>
	
	<?php if(!Auth::loginStatus() ) { ?>

			<li class="<?php Route::Current('/login') ?>"><a href="/login">Login</a></li>
			<li class="<?php Route::Current('/register') ?>"><a href="/register">Signup</a></li>

		<?php 
			
		} else { ?>
			<li class="userinfo">Welcome, <?= Auth::User()['name']; ?></li>
			<li class="<?php Route::Current('/dashboard') ?>"><a href="/dashboard">Dashboard</a></li>
			<li class="<?php Route::Current('/profile') ?>"><a href="/profile">Profile</a></li>
			<li class="<?php Route::Current('/logout') ?>"><a href="/logout">Logout</a></li>
<?php  }?>
			
	</ul>
	<div class="clearfix"></div>
	</div><!--mobile toggle wrap -->
</header>


