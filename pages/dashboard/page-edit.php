<?php require_once 'header.php'; ?>

<div class="wrapper bg-white">

		<?php if(isset($data['title'])) {?>
				<h1 class="page-title"><?= $data['title']; ?></h1>
		<?php }?>
		<p class="text-bold"><?= $data['message']; ?></p>

</div>


<div class="wrapper">
	<div class="book-list-wrapper">
		<div class="books-list-item">
			<form action="/dashboard/page/edit" name="editpage" method="post">
                <div class="form-group w-80">
                <p>Title</p>
                    <input type="hidden" name="id" value="<?= $data['page'][0]['id']?>">
                    <input type="text" name="title" placeholder="Page Title" class="form-control" value="<?= $data['page'][0]['title']?>">
                </div>

                <p>Slug</p>
                <div class="form-group w-80">
                    <input type="text" name="slug" placeholder="Page Title" class="form-control" value="<?= $data['page'][0]['slug']?>">
                </div>

                <div class="form-group w-80">

                <p>Contents</p>
                    <textarea name="contents" placeholder="contents" rows="50" cols="60" style="width: 100%"><?= $data['page'][0]['contents']?></textarea>
                </div>
                           

                <div class="form-group">
                    <button type="submit" name="submit"> Update </button>
                </div>

            </form>
		</div>
	</div>
</div>


<?php require_once '/pages/footer.php'; ?>