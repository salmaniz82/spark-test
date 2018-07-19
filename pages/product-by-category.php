
    <?php if( $data['products'] !=null) {?>

    <?php foreach($data['products'] as $key => $value ) {?>

    	<div class="item-wrap">

    		<img src="http://placehold.it/100x100" class="item-name">
    		<div class="item-name"><?= $value['name']?></div>
    		<div class="item-name">$ 100.99</div>
    		<div class="item-name"><a href="#">Add To Cart</a></div>
    		
    	</div> <!--item wrap-->

    	<?php }
    		// end foreach 
    	} 
    	
    		else {
    	// 
    	?>

    	<p>No Records in this category Yet</p>

    	<?php }?>


      