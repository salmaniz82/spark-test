<?php require_once 'header.php'; ?>

<div class="wrapper">
    <div class="book-list-wrapper">
       <?php $book = $data['book'][0]; ?>
            <div class="books-list-item">

           

            
                <h3 class="title"><a href="/book/<?= $book['id'] ?>"> <?= $book['name'] ?> </a></h3>

                <?php if(Auth::loginStatus() && ( Auth::User()['role_id'] == '1' || Auth::User()['name'] == $book['author'] )) { ?>

                    <a href="/book/edit/<?= $book['id'] ?>" class="book-edit">Edit</a>
                    <a href="/book/delete/<?= $book['id'] ?>" class="book-remove">Remove</a>

                <?php } ?>

                <p class="book-desc">

                    <?= $book['details'];?>
                    
                </p>
                <div class="book-meta clear-after">
                    <span class="author">Author : <?= $book['author'] ?></span>
                    <span class="publised_date">Published Date : <?= $book['published_date'] ?></span>
                </div>
            </div>
            
       
    </div>
</div>


<?php require_once 'footer.php'; ?>