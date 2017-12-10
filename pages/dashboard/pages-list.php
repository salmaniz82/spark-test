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
			<table border="0">
				<thead>
					
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Slug</th>
						<th colspan="2">Actions</th>
					</tr>

				</thead>

				<tbody>
					<?php foreach ($data['pages'] as $key => $value) { ?>
					<tr>
						<td><?= $value['id'] ?></td>
						<td><?= $value['title'] ?></td>
						<td><?= $value['slug'] ?></td>
						
						<td><a href="/dashboard/page/edit/<?= $value['id'] ?>">Edit</a></td>
						<td>Remove</td>
					</tr>
					 <?php }?>
				</tbody>

			</table>
		</div>
	</div>
</div>


<?php require_once 'pages/footer.php'; ?>