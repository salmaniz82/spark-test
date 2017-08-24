<aside class="categories bg-white">

    <ul class="categories">
    	<?php foreach($data['categories'] as $key => $cat) { ?>

    		<li><a href="/shop/<?= $cat['id'] ?>"><?= $cat['name'] ?></a></li>

		<?php } ?>    	
		</ul>
    </aside>