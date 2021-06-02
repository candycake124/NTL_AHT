<content>
	<h1>CUSTOMER</h1>
	<table>
		<tr>
			<th>STT</th>
			<th>Name</th>
			<th>Mail</th>
			<th>Avatar</th>
			<th>Date Created</th>
			<th>Date update</th>
			<th>Action</th>
		</tr>
		<?php 
		$dem=0;
		foreach ($data_customer as $value) {
			$dem++;
			?>
			<tr>
				<form method="POST" action="index.php?action=home">
					<td><?php print $dem; ?></td>
					<td><input type="text" name="name" value="<?php print $value['name']; ?>"></td>
					<td><input type="text" name="email" value="<?php @print $value['email']; ?>"></td>
					<td><input type="file" name="img" accept="image/*"></td>
					<td><input type="text" name="created_date" value="<?php print $value['created_date']; ?>" readonly></td>
					<td><input type="text" name="updated_date" value="<?php print $value['updated_date']; ?>" readonly></td>
					<td> <button type="submit" name="edit" value="<?php print $value['id']?>"><i class="far fa-edit"></i></button>
						<button value="<?php print $value['id']?>" name="delete"><i class="far fa-trash-alt"></i></button></td>
				</form>
			</tr>
			<?php } ?>
</table>
	<div class="add_customer">
			<h1>ADD CUSTOMER</h1>
			<form method="post">
				<div class="item">
					<p>name: </p>
					<input required type="text" name="name" placeholder="Nguyen Thi Ly">
				</div>
				<div class="item">
					<p>email: </p>
					<input required type="text" name="email" placeholder="ntly@gmail.com">
				</div>
				<div class="item">
					<p>Avatar: </p>
					<input required type="file" name="img" ">
				</div>
				<input type="submit" name="add" value="ADD">
			</form>
		</div>
</content>