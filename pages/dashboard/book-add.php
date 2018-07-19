<?php require_once 'header.php'; ?>

    <div class="wrapper">
        <div class="page-body">
            <h2>Enter New Book Details</h2>
            <?php  if(isset($data['message'])) {?>
            <div class="message <?= $data['class']?> ">
                <?= $data['message']?>
            </div>
            <?php }?>
            <form action="/book/add" name="addnewbook" method="post">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Enter Book title" class="form-control">
                </div>

                <div class="form-group">

                <p>Add Books Details here</p>
                    <textarea name="details" placeholder="Details" rows="10" cols="60"></textarea>
                </div>

               

                <div class="form-group">
                    <input type="date" placeholder="publihsed Date" name="published_date" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" name="submit">Proceed</button>
                </div>

            </form>
        </div>
    </div>

<?php require_once 'pages/footer.php'; ?>