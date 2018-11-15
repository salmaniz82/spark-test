<?php require_once 'header.php'; ?>

<div class="wrapper bg-white">

<?php $page = $data['page'][0]; ?>

		<?php if(isset($page['title'])) { ?>

				<h1 class="page-title"><?= ucwords($page['title']); ?></h1>
				
		<?php }?>

		<h3>Introduction</h3>

		<p class="desc"><?php echo $page['contents']; ?> </p>
	
</div>


<div class="wrapper">
	<h4>What it offers and what it doesn't have</h4>
</div>


<div class="book-list-wrapper">

	

	

	<?php foreach($data['todos'] as $key => $todo) {?>


		

		<div class="books-list-item wrapper <?php echo ($todo['is_complited'] == 1 ? 'done' : 'pending');?>">

            <p class="status">Status: <span><?php echo ($todo['is_complited'] == 1 ? 'Completed' : 'Work in progress');?></span> </p>

            <p class="book-desc todo" style="font-size: 20px;">
                   - <?=_e($todo['todo'])?>           </p>
            </div>


	<?php }?>

		

</div>


<?php require_once 'footer.php'; ?>