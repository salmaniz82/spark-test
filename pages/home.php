<?php include_once 'header.php'; ?>


<div class="wrapper bg-white">
	
<?php if(isset($data['title'])) {?>
				<h1 class="page-title"><?= $data['title']; ?></h1>
		<?php }?>


<p>This is a minimal MVC - Framework written in PHP using OOD i.e Object Oriented Design.
its constanly going under fine tuning and refractoring
We opplogize if you encountered any incovenience while using this framwork

This is usefull when available framework and CMS is just an overkill for you application or simple doest have the flexibilty.</p>

This will give you flavour of MVC and yet keep the door open customization and flexibility.</p>

<p>Future plans to have support for the following features. Routing, Controller Mapping and CRUD Functionality already added and working</p>


<?php foreach ($data['features'] as $value) { ?>
	<p class="desc"> - <?= $value?></p>

<?php }?>




	<p class="bg-green"> View is rendered from View class and content fruits is dynamically injected using arrays </p>




</div>

</body>
</html>