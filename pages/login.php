<?php require_once 'header.php'; ?>

<div class="wrapper bg-white">
		<h1 class="page-title"><?= $data['title']; ?></h1>
		
		<div class="login-form-container">


			<?php if(isset($_SESSION['flashMsg'])) {?>

			<div class="message <?=$_SESSION['fClass']?>" id="flash-message"><?=$_SESSION['flashMsg']?></div>

			<?php }unset($_SESSION['flashMsg']); unset($_SESSION['fClass']);?>

			
			<form method="post" name="login" action="/login">
				<p><input type="email" name="email" placeholder="Email"></p>
				<p><input type="password" name="password" placeholder="Password"></p>
				<button type="submit">Login</button>
			</form>			

		</div><!-- login -->	
</div>


<?php require_once 'footer.php'; ?>