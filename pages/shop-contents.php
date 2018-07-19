

<?php foreach($data['products'] as $key => $value ) {?>



    	<div class="item-wrap">

    		<img src="http://placehold.it/100x100" class="item-name">
    		<div class="item-name"><?= $value['name']?></div>
    		<div class="item-name">$ 100.99</div>
    		<div class="item-name"><a id="add-to-cart" href="/cart/add/<?=$value['id']?>/1">Add To Cart</a></div>
    	</div> 

    

<?php }?>




