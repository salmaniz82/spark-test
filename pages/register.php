<?php require_once 'header.php'; ?>

<div class="wrapper bg-white">

		<?php if(isset($data['title'])) {?>
				<h1 class="page-title"><?= $data['title']; ?></h1>
		<?php }?>
		<p class="text-bold"><?= $data['message']; ?></p>

		<div class="register-form-wrap">
			<form name="register" method="post" action="register">

			<input type="text" name="name" placeholder="Name">
			<input type="email" name="email" placeholder="Email">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" name="doRegister"> Register </button>
				
			</form>
		</div>

		
</div>


<?php require_once 'footer.php'; ?>