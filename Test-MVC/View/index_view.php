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
	require_once 'view/header.php';
	?>
	<div class="bodyyy">
		<form method="post">
			<input type="submit" value="Đăng xuất" name="logout">
		</form>
		<div class="left">
			<ul>
				<li><a href="?action=user">Manage User</a></li>
				<li><a href="?action=home">Manage Customer</a></li>
				<li><a href="?action=myuser">My User</a></li>
			</ul>
		</div>
		
		<div class="right">
			<?php 
			switch ($_GET['action']) {
				case 'home':
					require_once 'view/manage_customer.php';
					break;
				
				case 'user':
					require_once 'view/manage_user.php';
					break;

				case 'myuser':
					require_once 'view/myuser.php';
					break;
				default:
					require_once 'view/manage_customer.php';
					break;
			}
			 ?>
		</div>
	</div>
</body>
</html>