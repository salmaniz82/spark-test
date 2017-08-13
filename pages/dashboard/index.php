<?php require_once 'header.php'; ?>

<div class="wrapper bg-white">

		<?php if(isset($data['title'])) {?>
				<h1 class="page-title"><?= $data['title']; ?></h1>
		<?php }?>
		<p class="text-bold"><?= $data['message']; ?></p>

		
</div>


<?php require_once '/pages/footer.php'; ?>