<?php include_once 'header.php'; ?>

<div class="wrapper bg-white">

<table class="w-100 cart-table fixed">
	<thead>
		<th>Id</th>
		<th style="width: 50%">Product</th>
		<th>Price</th>
		<th><<</th>
		<th>Quantity</th>
		<th>>></th>
		<th>Sub Total</th>
	</thead>

	<tbody>

		<?php $total  = 0;?>

	<?php foreach ($data['cart-products'] as $key => $prdc): ?>


		<tr>
			<td><?=$prdc['id']?></td>
			<td><?= ucwords($prdc['name']) ?></td>
			<td><?=$prdc['price']?></td>
			
			<td>
				<form action="#" method="get">				
				<input type="text" name="quantity" value="<?=$prdc['quantity']?>" style="width: 3rem">
				</form>	
			</td>

			<td>
				<div class="cart-ud-wrap">
					<a href="/cart-details?a=l&p=<?=$prdc['id']?>&q=1" class="cart-ud-btn">&#9660;</a>
					<a href="/cart-details?a=m&p=<?=$prdc['id']?>&q=1" class="cart-ud-btn">&#9650;</a>
				</div>
				
			</td>



			<?php $total += ($prdc['price'] * $prdc['quantity']); ?>
			
			<td><?php echo number_format(($prdc['price'] * $prdc['quantity']));   ?></td>

		</tr>



	<?php endforeach ?>

	<tr>
		<td colspan="6" style="text-align: right">Total Cost</td>
		<td style="font-size: 1.5rem"><?php echo $total; ?></td>

	</tr>

	</tbody>

</table>

</div>


<?php require_once 'footer.php'; ?>