<?php require_once 'header.php'; ?>

<div class="wrapper">
	<div class="book-list-wrapper">
		<div class="books-list-item">
			<form action="/dashboard/products/add" name="addproducts" method="post">

                <div class="form-group w-80">
                <p>Category</p>
                    <select name="category_id" class="form-control">

                    <?php foreach($data['categories'] as $key => $cat) {?>
                        <option value="<?= $cat['id']?>"><?= $cat['name']?></option>
                        <?php }?>
                    </select>
                </div>

                <div class="form-group w-80">
                <p>Product Name</p>
                    
                    <input type="text" name="name" placeholder="Enter Product Name" class="form-control" value="">
                </div>

                <div class="form-group w-80">
                <p>Details</p>
                    <textarea name="detail" placeholder="contents" rows="10" cols="60" style="width: 100%"></textarea>
                </div>
                           

                <div class="form-group">
                    <button type="submit" name="submit"> Save </button>
                </div>

            </form>
		</div>
	</div>
</div>

<?php require_once 'pages/footer.php'; ?>