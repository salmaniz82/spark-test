

<?php foreach($data['products'] as $key => $value ) {?>

		

    	<div class="item-wrap">

    		<img src="https://loremflickr.com/100/100/gadgets" class="item-name">
    		<div class="item-name"><?= $value['name']?></div>
    		<div class="item-name">$<?= $value['price']?></div>
    		<div class="item-name"><a id="add-to-cart" href="/cart/add/<?=$value['id']?>/1">Add To Cart</a></div>
    	</div> 

    

<?php }?>





