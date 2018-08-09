<?php require_once 'header.php'; ?>

<div class="wrapper">
    <div class="book-list-wrapper">
     <?php  if(isset($data['message'])) {?>
            <div class="message <?= $data['class']?> ">
                <?= $data['message'] ?>
            </div>
            <?php }?>


            <?php if(Auth::loginStatus() ) { ?>

            <div class="books-list-item">
                <p class="book-desc todo" style="font-size: 20px;">Add New Todo</p>
                <form name="addnewTodoForm" method="post" action="/todo/add" method="post">
                   
                    <input type="text" name="todo" autocomplete="off" placeholder="Todo" style="width: 500px; padding: 5px; font-size: 20px;">
                    <input type="hidden" name="date_created" value="<?= date("Y-m-d") ?>">
                    <input type="hidden" name="user_id" value="<?= Auth::User()['id']; ?>">
                    <input type="hidden" name="is_complited" value="0">

                    <button type="submit" style="padding: 5px">Add Todo</button>

                </form>
            </div>

            <?php }?>

            <?php if($data['todos'] != null && $data['count'] > 0) {?>

        <?php  foreach ( $data['todos'] as $key => $todos) { ?>
            <div class="books-list-item <?php echo ($todos['is_complited'] == 1 ? 'done' : 'pending');?>">

            <p class="status">Status: <?php 
                   if($todos['is_complited'])
                   {
                    echo '<span>Done</span>';
                   }
                   else {
                    echo '<span>Pending<span>';
                   }
                ?> </p>

            <p class="book-desc todo" style="font-size: 20px;">
                   - <?= htmlspecialchars($todos['todo']); ?>
                </p>

            <a href="/todo/clear/<?= $todos['id'].'/'.$todos['user_id']?>" class="remove-todo-btn">X</a>
                

                <form name="markTodoComplepted<?=$todos['id']?>" action="/todo/update/<?=$todos['id']?>" method="post">
                <label class="markDone"> 
                <input type="hidden" name="date_complited" value="<?= date("Y-m-d") ?>">
                    <input type="checkbox" name="is_complited" value="1" <?php echo ($todos['is_complited'] == 1 ? 'checked=checked' : '');?>" onchange="this.form.submit()"> Complited </label>
                </form>


                </h3>
                
                
                <div class="book-meta clear-after todo">
                    <span class="publised_date">Published Date : <?= $todos['date_created'] ?></span>
                    <span class="complited_date">Complited Date : <?= $todos['date_complited'] ?></span>
                </div>
            </div>
        <?php } ?>
        <p>Total Todos : <?php echo $data['count']; ?></p>
        <p>Pending Todos : <?php echo 2; ?></p>
        <p>Complited Todos : <?php echo 0 ?></p>
        <?php } else { ?>

        <div class="books-list-item">
                <p class="book-desc todo" style="font-size: 20px;">TODOs Not Fount please add some!</p>
        </div>        
        <?php } ?>

    </div>
</div>


<?php require_once 'footer.php'; ?>


