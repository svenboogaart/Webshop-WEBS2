<html>
	<head>
		<link rel="stylesheet" type="text/css" href="standaard/style.css">
		<style>
			.product
			{
				width:150px;
				margin-left:26px;
				margin-bottom:20px;
				float:left;
				height:200px;
				background-color:#dddddd;
			}
			
			.product img
			{
				width:150px;
				height: 200px;
			}
		</style>
	</head>
	<body>
		<?php
			require('/standaard/header.php');
		?>
		<div class="wrapper">
			<?php
				 require('/standaard/menu.php');
			 ?>
			 <div id="content">
			 	<div style="width:990px;">
				 	<div id="leftmenubar">
				 		<div class="leftmenuitem">
					 		<a href="#">submenuitem</a>		 			
				 		</div>
				 		<div class="leftmenuitem">
					 		<a href="#">submenuitem</a>		 			
				 		</div>
				 		<div class="leftmenuitem">
					 		<a href="#">submenuitem</a>		 			
				 		</div>
				 	</div>
				 	<div style="width:720px; height: auto; float:left;">	
				 		<h1 style="margin-left: 30px; ">Komedie </h1>
				 		<?php
				 		for ($i = 1; $i <= 12; $i++)
						{
							?>
							<div class="product">
								<a href="product.php">
									<img src="img/productimg/dvd.jpg">
								</a>		 
							</div>
							<?php
						}
				 		?>
						
						
					</div>
				 </div>
			 </div>
		 </div>
		 <?php
			 require('standaard/footer.php');
		 ?>
	</body>
</html>