<aside class="categories bg-white">

    <ul class="categories">
    <li>Check</li>
    	<?php foreach($data['categories'] as $key => $cat) { ?>

    		<li><a href="/shop/<?= $cat['id'] ?>"><?= $cat['name'] ?></a></li>

		<?php } ?>    	
		</ul>
    </aside>