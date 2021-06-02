<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php 
	require_once url_view.'header.php';
	?>
	<div class="bodyyy">
		<form method="post" style="float: right;">
			<?php 
			if (isset($_SESSION['log'])) {
				?><input type="submit" value="Đăng xuất" name="logout"><?php
			}
			?>
			<?php 
			if (!isset($_SESSION['log'])) {
				?><a href="?action=login">Đăng nhập</a><?php
			}
			?>
			
		</form>
		<div class="left">
			<ul>
				<?php
				if (isset($_SESSION['log'])) {

					if ($_SESSION['type']==1) {
						?>
						<li><a href="?action=user">Manage User</a></li>
						<li><a href="?action=home">Manage Customer</a></li>
						<?php
					}
					?>
					<li><a href="?action=myuser">My User</a></li>
					<li><a href="?action=homepage">Home Page</a></li>
					<?php
				}
				?>
			</ul>
		</div>
		
		<div class="right">
			<?php 
			if (isset($_GET['action']) && isset($_SESSION['log'])) {
				switch ($_GET['action']) {
					case 'home':
					require_once url_view.'manage_customer.php';
					break;

					case 'user':
					require_once url_view.'manage_user.php';
					break;

					case 'myuser':
					require_once url_view.'myuser.php';
					break;

					case 'homepage':
					require_once url_view.'home.php';
					break;
				}
			}else require_once url_view.'home.php';
			
			?>

		</div>
	</div>
</body>
</html>