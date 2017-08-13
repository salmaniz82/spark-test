<?php require_once 'header.php'; ?>

<div class="wrapper">
    <div class="book-list-wrapper">
     <?php  if(isset($data['message'])) {?>
            <div class="message <?= $data['class']?> ">
                <?= $data['message'] ?>
            </div>
            <?php }?>
        <?php  foreach ( $data['books'] as $key => $book) { ?>
            <div class="books-list-item">
                <h3 class="title"><a href="/book/<?= $book['id'] ?>"> <?= $book['name'] ?> </a></h3>
                
                <p class="book-desc">
                    <?= $book['details']; ?>
                </p>
                <div class="book-meta clear-after">
                    <span class="author">Posted By : <?= $book['author'] ?></span>
                    <span class="publised_date">Published Date : <?= $book['published_date'] ?></span>
                </div>
            </div>
        <?php } ?>
        <p>Total Books : <?php echo $data['count']; ?></p>
    </div>
</div>


<?php require_once 'footer.php'; ?>


