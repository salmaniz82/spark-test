<?php require_once ABSPATH.'pages/header.php'; ?>

<?php if(isset($_SESSION['flashMsg'])) {?>

			<div class="message <?=$_SESSION['fClass']?>" id="flash-message"><?=$_SESSION['flashMsg']?></div>

			<?php }unset($_SESSION['flashMsg']); unset($_SESSION['fClass']);?>

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