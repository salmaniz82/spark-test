<?php require_once 'header.php'; ?>

<div class="wrapper bg-white">


	


<?php $page = $data['page'][0]; ?>

		<?php if(isset($page['title'])) { ?>
				<h1 class="page-title" style="color: blue"><?= ucwords($page['title']); ?></h1>
		<?php }?>

		<p class="desc"><?php echo $page['contents']; ?> </p>
	
</div>


<?php require_once 'footer.php'; ?>