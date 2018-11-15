<aside class="categories bg-white">

    <ul class="categories">
    <li>Check</li>
    	<?php foreach($data['categories'] as $key => $cat) { ?>




    		<li class="<?= (Route::$params['category_id'] == $cat['id']) ? 'active' :  '' ?>">
    			<a href="/shop/<?= $cat['id'] ?>"><?= $cat['name'] ?></a></li>


    		<?php }?>

		  	
		</ul>


			<a href="/cart/clear" id="clear-cart-button">Clear Cart Items</a>

		

		

    </aside>