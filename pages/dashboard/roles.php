<?php require_once 'header.php'; ?>

<?php if(isset($_SESSION['flashMsg'])) {?>

			<div class="message <?=$_SESSION['fClass']?>" id="flash-message"><?=$_SESSION['flashMsg']?></div>

			<?php }unset($_SESSION['flashMsg']); unset($_SESSION['fClass']);?>

<div class="wrapper bg-white">


	<div><a href="/dashboard/roles?new=true">Add Roles</a></div>

	<?php if(isset($_GET['new']) && $_GET['new'] == true) {?>


		<form method="post" action="/dashboard/roles">

			
			<input type="text" name="role" placeholder="Enter Role Name" class="form-control w-50">

			<div> <button type="submit" name="saveRole">Save</button> </div>

			<div class="form-group w-80">
                
            </div>		
		</form>

		
	<?php } ?>

		<table>
			<tr>
				<thead>
					<tr>
						<th>id</th>
						<th>Role</th>
						<th>Actions</th>
					</tr>
				</thead>
			</tr>

			<?php foreach($data as $key => $role) {?>

			<tr>
				<td><?=$role['id']?></td>
				<td><?=$role['role']?></td>
				<td>

					<ul class="actionDropDown">
						<li class="listHeader">

							<div class="dropToggle">Actions</div>

							<ul class="dropdown-list">
								<li class="dropdown-item"><a href="#"> Policies </a></li>
								<li class="dropdown-item"><a href="#"> Edit </a></li>
								<li class="dropdown-item"><a href="#"> Delete </a></li>
							</ul>

						</li>
					</ul>
					
				</td>
			</tr>

		<?php }?>

		</table>

		
</div>


<?php require_once 'pages/footer.php'; ?>