<?php require_once 'header.php'; ?>

<?php if(isset($_SESSION['flashMsg'])) {?>

			<div class="message <?=$_SESSION['fClass']?>" id="flash-message"><?=$_SESSION['flashMsg']?></div>

			<?php }unset($_SESSION['flashMsg']); unset($_SESSION['fClass']);?>

<div class="wrapper bg-white">


<p>ACL : 'manage Role is'  <?php  var_dump(ACL::isPermitted('manage-permissions', 'private'))?></p>
	

	<?php if(isset($_GET['new']) && $_GET['new'] == true) {?>


		<h3>Add New Policies</h3>


		<form method="post" action="/dashboard/permissions" class="permissions">


			<div class="row">


				<div class="w-25 f-left">
				<label class="d-block">Roles</label>
				<select name="role_id">
					
					<option value="" selected="selected" disabled="true">Select Roles</option>	

					<?php foreach($data['roles'] as $key => $role) {?>

						<option value="<?=$role['id']?>"><?=$role['role']?></option>


					<?php }?>

				</select>
			</div>
			<div class="w-25 f-left">

				<label class="d-block">Actions Resources</label>
				<select name="resource_id">
					
					<option value="" selected="selected" disabled="true">Select Resource</option>

					<?php foreach($data['resources'] as $key => $res) {?>

						<option value="<?=$res['id']?>"><?=$res['name']?></option>


					<?php }?>


				</select>
				
			</div>


			<div class="w-20">
				<button type="submit" name="addToPermissions">Add To Policies</button>
			</div>

			</div><!-- row -->


			<div class="row">
				<div class="w-50">
					<label>Public 
						<input type="checkbox" name="public" value="1">
					</label>

					<label>Private 
						<input type="checkbox" name="private" value="1">
					</label>
				</div>
			</div>
			
		</form>

		<hr>

		
	<?php } else { ?>

		<div><a class="btn btn-success" href="/dashboard/permissions?new=true">Add Permissions</a></div>

	<?php }?>



		<table>
			<tr>
				<thead>
					<tr>
						<th>id</th>
						<th>Role</th>
						<th>Resource</th>
						<th>Private</th>
						<th>Public</th>
						<th>Actions</th>
					</tr>
				</thead>
			</tr>

			<?php foreach($data['permissions'] as $key => $permission) {?>

			<tr>
				<td><?=$permission['id']?></td>
				<td><?=$permission['role']?></td>
				<td><?=$permission['name']?></td>
				<td><?=$permission['private']?></td>
				<td><?=$permission['public']?></td>
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