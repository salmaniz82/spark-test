<?php require_once 'header.php'; ?>

<div class="shop-container">

    
    <?php View::composeTemplateCurl('buildshopcategories/all'); ?>

    
    <main class="products listings bg-white">

    <?php foreach($data['products'] as $key => $value ) {?>

    	<div class="item-wrap">

    		<img src="http://placehold.it/100x100" class="item-name">
    		<div class="item-name"><?= $value['name']?></div>
    		<div class="item-name">$ 100.99</div>
    		<div class="item-name">Add To Cart</div>
    		
    	</div> <!--item wrap-->

    	<?php }?>
        
    </main>


    <div class="clearfix"></div>
</div>


<?php require_once 'footer.php'; ?>