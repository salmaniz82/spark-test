<?php require_once ABSPATH.'pages/header.php'; ?>

<div class="shop-container">

    
    <?php 

    $tempPath = ( isset(Route::$params['category_id']) ) ? Route::$params['category_id'] : 'all';
    
	    View::composeTemplateCurl('buildshopcategories/'.$tempPath); 
	    
    ?>



    

    
    <main class="products listings bg-white">
        {{contents}}
    </main>




    <div class="clearfix"></div>
</div>


<?php require_once ABSPATH.'pages/footer.php'; ?>