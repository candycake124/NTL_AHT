<?php  if (!defined('SITE_IS')) die('The request not found'); ?>
<content>
	<div class="home">
		<h1>DANH SÁCH KHÁCH HÀNG</h1>
	</div>
	<div class="customer">
		<?php 
		foreach ($data_customer as $value) {
			?>
			<div class="item">
				<img src="img/<?php echo $value['image'] ?>">
				<div class="infor">
					<h2><?php echo $value['name'] ?></h2>
					<p><?php echo $value['email'] ?></p>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</content>