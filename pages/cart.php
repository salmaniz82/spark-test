<?php include_once 'header.php'; ?>

<div class="wrapper bg-white">

<table class="w-100 cart-table fixed">
	<thead>
		<th>Id</th>
		<th style="width: 50%">Product</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>&nbsp;</th>
		<th>Sub Total</th>
		<th>&nbsp;</th>
	</thead>

	<tbody>

		<?php $total  = (double) 0;?>

	<?php foreach ($data['cart-products'] as $key => $prdc): ?>


		<tr>
			<td><?=$prdc['id']?></td>
			<td><?= ucwords($prdc['name']) ?></td>

			<?php $price = (double) number_format($prdc['price'], 2); ?>	

			<td><?php echo number_format($price, 2); ?></td>
			
			<td>
				<form action="#" method="get">				
				<input type="text" name="quantity" value="<?=$prdc['quantity']?>" style="width: 3rem">

				</form>	

			</td>

			<td>
				<div class="cart-ud-wrap">
					<a href="/cart-details?a=l&p=<?=$prdc['id']?>&q=1" class="cart-ud-btn less">&#9660;</a>
					<a href="/cart-details?a=m&p=<?=$prdc['id']?>&q=1" class="cart-ud-btn more">&#9650;</a>
				</div>
				
			</td>



			<?php 

			$quantity = (double) $prdc['quantity'];


			$subTotal = (double) abs($price * $quantity);



			$total += $subTotal;


			?>
			
			<td><?php echo number_format($subTotal, 2);?></td>

			<td><a href="/cart-details?a=rs&p=<?=$prdc['id']?>&q=x" class="cart-ud-btn rmv">&times;</a></td>

		</tr>



	<?php endforeach ?>

	<tr>
		<td colspan="4" style="text-align: right">Total Cost</td>
		<td colspan="2" style="font-size: 1.5rem; text-align: right; "><?php echo number_format($total, 2);?>/- </td>

	</tr>

	</tbody>

</table>

</div>


<?php require_once 'footer.php'; ?>