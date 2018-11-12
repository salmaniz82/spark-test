<?php include_once 'header.php'; ?>

<div class="wrapper bg-white">

<table class="w-100 cart-table">
	<thead>
		<th>Id</th>
		<th>Product</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Sub Total</th>
	</thead>

	<tbody>

		<?php $total  = 0;?>

	<?php foreach ($data['cart-products'] as $key => $prdc): ?>


		<tr>
			<td><?=$prdc['id']?></td>
			<td><?=$prdc['name']?></td>
			<td><?=$prdc['price']?></td>
			<td>
				<form action="#" method="get">
					
				<input type="text" name="quantity" value="<?=$prdc['quantity']?>">
				
				</form>	
			</td>



			<?php $total += ($prdc['price'] * $prdc['quantity']); ?>
			
			<td><?php echo ($prdc['price'] * $prdc['quantity']) ?></td>

		</tr>



	<?php endforeach ?>

	<tr>
		<td colspan="4" style="text-align: right">Total Cost</td>
		<td style="font-size: 1.5rem"><?php echo $total; ?></td>

	</tr>

	</tbody>

</table>

</div>


<?php require_once 'footer.php'; ?>