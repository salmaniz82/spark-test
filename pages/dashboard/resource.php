<?php require_once 'header.php'; ?>

<?php if(isset($_SESSION['flashMsg'])) {?>

			<div class="message <?=$_SESSION['fClass']?>" id="flash-message"><?=$_SESSION['flashMsg']?></div>

			<?php }unset($_SESSION['flashMsg']); unset($_SESSION['fClass']);?>

<div class="wrapper bg-white">


	<div><a href="/dashboard/resource?new=true">Add Resources</a></div>

	<?php if(isset($_GET['new']) && $_GET['new'] == true) {?>


		<form method="post" action="/dashboard/resource">

			
			<input type="text" name="name" placeholder="Enter Permission" class="form-control w-50">

			<div> <button type="submit" name="saveResource">Save</button> </div>

			<div class="form-group w-80">
                
            </div>		
		</form>

		
	<?php } ?>

		<table>
			<tr>
				<thead>
					<tr>
						<th>id</th>
						<th>Resources</th>
						<th>Actions</th>
					</tr>
				</thead>
			</tr>

			<?php foreach($data as $key => $res) {?>

			<tr>
				<td><?=$res['id']?></td>
				<td><?=$res['name']?></td>
				<td>

					<ul class="actionDropDown">
						<li class="listHeader">

							<div class="dropToggle">Actions</div>

							<ul class="dropdown-list">
								<li class="dropdown-item"><a href="#"> Edit </a></li>
								<li class="dropdown-item"><a href="#"> Delete </a></li>
								<li class="dropdown-item"><a href="#"> Permissions </a></li>
							</ul>

						</li>
					</ul>
					
				</td>
			</tr>

		<?php }?>

		</table>

		
</div>


<?php require_once 'pages/footer.php'; ?>