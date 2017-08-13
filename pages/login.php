<?php require_once 'header.php'; ?>

<div class="wrapper bg-white">
		<h1 class="page-title"><?= $data['title']; ?></h1>
		
		<div class="login-form-container">
			
			<form method="post" name="login" action="/login">
				<p><input type="email" name="email" placeholder="Email"></p>
				<p><input type="text" name="password" placeholder="Password"></p>
				<button type="submit">Login</button>
			</form>			

		</div><!-- login -->	
</div>


<?php require_once 'footer.php'; ?>