<?php require_once 'header.php'; ?>

<div class="shop-container">
    
    <?php 
    //echo View::composeTemplatePartial('buildshopcategories'); 
    View::composeTemplateCurl('buildshopcategories');
    ?>


    <main class="products listings bg-white">
        <?php var_dump($data['products']) ?>
    </main>


    <div class="clearfix"></div>
</div>


<?php require_once 'footer.php'; ?>