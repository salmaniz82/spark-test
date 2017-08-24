<?php require_once 'header.php'; ?>

    <div class="wrapper">
        <div class="page-body">
            <h2><?= $data['title']; ?></h2>
            <?php  if(isset($data['message'])) {?>
            <div class="message <?= $data['class']?> ">
                <?= $data['message']?>
            </div>
            <?php }?>

                <?php $book = $data['book'][0]; ?>

            <form action="/book/edit/<?=$book['id']?>" name="udpateBookDetails" method="post">
                
                <div class="form-group">
                    <input type="text" name="name" placeholder="Enter Book title" class="form-control" value="<?= $book['name'] ?>">
                </div>

                <div class="form-group">

                <p>Edit</p>
                    <textarea name="details" placeholder="Details" rows="10" cols="60"><?= $book['details'] ?></textarea>
                </div>

               

                <div class="form-group">
                    <input type="date" placeholder="publihsed Date" name="published_date" class="form-control" value="<?= $book['published_date'] ?>">
                </div>

                <div class="form-group">
                    <button type="submit" name="submit">Proceed</button>
                </div>

            </form>
        </div>
    </div>

<?php require_once '/pages/footer.php'; ?>