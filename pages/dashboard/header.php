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

		<?php if(ACL::isPermitted('manage-pages') || ACL::isAdmin()) {?>	
			<li><a href="/dashboard/pages">Pages</a></li>
		<?php }?>
		<?php if(ACL::isPermitted('manage-products') || ACL::isAdmin()) {?>	
			<li><a href="/dashboard/products/add">Products</a></li>
		<?php }?>

		<?php if(ACL::isPermitted('manage-roles') || ACL::isAdmin()) {?>	
			<li><a href="/dashboard/roles">Roles</a></li>
		<?php }?>
		<?php if(ACL::isPermitted('manage-resource') || ACL::isAdmin()) {?>	
			<li><a href="/dashboard/resource">Resource</a></li>
		<?php }?>
		<?php if(ACL::isPermitted('manage-permissions') || ACL::isAdmin()) {?>	
			<li><a href="/dashboard/permissions">Permissions</a></li>
		<?php }?>

		<?php if(ACL::isPermitted('manage-invoices') || ACL::isAdmin()) {?>	
			<li><a href="#">Invoices</a></li>
		<?php }?>

		<?php if(ACL::isPermitted('manage-orders') || ACL::isAdmin()) {?>	
			<li><a href="#">Orders</a></li>
		<?php }?>
		
	</ul>

	<ul class="nav right-nav">
		<li><a href="/logout">logout</a></li>
	</ul>

	
	<div class="clearfix"></div>
</header>