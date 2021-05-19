<content>
	<h1>USER</h1>
	<table>
		<tr>
			<th>STT</th>
			<th>Name</th>
			<th>PassWord</th>
			<th>User Type</th>\
			<th>Action</th>
		</tr>
		<?php 
		$dem=0;
		foreach ($user as $value) {
			$dem++;
			?>
			<tr>
				<form method="POST">
					<td><?php echo $dem; ?></td>
					<td><input type="text" name="user" value="<?php echo $value['name']; ?>"></td>
					<td><input type="text" name="password" value="<?php echo $value['password']; ?>"></td>
					<td><input type="text" name="user_type" value="<?php echo $value['user_type']; ?>"></td>
					<td> <button type="submit" name="edit" value="<?php echo $value['id']?>"><i class="far fa-edit"></i></button>
						<button value="<?php echo $value['id']?>" name="delete"><i class="far fa-trash-alt"></i></button></td>
				</form>
			</tr>

			<?php
		}
		?>
	</table>
	<div class="add_customer">
			<h1>ADD USER</h1>
			<form method="post">
				<div class="item">
					<p>User: </p>
					<input required type="text" name="user" placeholder="ntly">
				</div>
				<div class="item">
					<p>PassWord: </p>
					<input required type="password" name="password" placeholder="123456789">
				</div>
				<div class="item">
					<p>User Type: </p>
					<select name="user_type">
						<option>1</option>
						<option>2</option>
					</select>
				</div>
				<input type="submit" name="adduser" value="ADD">
			</form>
		</div>
</content>