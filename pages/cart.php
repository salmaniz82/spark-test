<?php include_once 'header.php'; ?>

<div class="wrapper bg-white">

<table class="w-100 cart-table">
	<thead>
		<th>Id</th>
		<th>Product</th>
		<th>Price</th>
		<th>&nbsp</th>
		<th>Quantity</th>
		<th>&nbsp</th>
		<th>Sub Total</th>
	</thead>

	<tbody>

		<?php $total  = 0;?>

	<?php foreach ($data['cart-products'] as $key => $prdc): ?>


		<tr>
			<td><?=$prdc['id']?></td>
			<td><?= ucwords($prdc['name']) ?></td>
			<td><?=$prdc['price']?></td>
			<td><a href="/cart-details?a=l&p=<?=$prdc['id']?>&q=1">( - )</a></td>
			<td>

				

				<form action="#" method="get">
					
				<input type="text" name="quantity" value="<?=$prdc['quantity']?>">
				
				</form>	




			</td>

			<td>
				<td><a href="/cart-details?a=m&p=<?=$prdc['id']?>&q=1">( + )</a></td>
			</td>



			<?php $total += ($prdc['price'] * $prdc['quantity']); ?>
			
			<td><?php echo number_format(($prdc['price'] * $prdc['quantity']));   ?></td>

		</tr>



	<?php endforeach ?>

	<tr>
		<td colspan="7" style="text-align: right">Total Cost</td>
		<td style="font-size: 1.5rem"><?php echo $total; ?></td>

	</tr>

	</tbody>

</table>

</div>


<?php require_once 'footer.php'; ?>