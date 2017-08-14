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
		<li><a href="/">Public Area</a></li>
		<li><a href="/book/add">Add Book</a></li>
		
	</ul>

	<ul class="nav right-nav">
		<li><a href="/logout">logout</a></li>
	</ul>

	
	<div class="clearfix"></div>
</header>