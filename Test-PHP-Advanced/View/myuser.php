<content>
	<?php 
	$dem=0;
	foreach ($myuser as $value) {
		?>
		<div class="add_customer">
			<h1>MY USER</h1>
			<form method="post">
				<div class="item">
					<p>User: </p>
					<input readonly required type="text" name="user" value="<?php echo $value['name']; ?>">
				</div>
				<div class="item">
					<p>PassWord: </p>
					<input  type="password" name="password" value="">
				</div>
				<div class="item">
					<p>User Type: </p>
					<select name="user_type">
						<option>1</option>
						<option>2</option>
					</select>
				</div>
				<button type="submit" name="edit" value="<?php echo $value['id']; ?>">edit</button>
			</form>
		</div>
		<?php
	}
	?>
</content>