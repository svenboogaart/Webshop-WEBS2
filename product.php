<html>
	<head>
		<link rel="stylesheet" type="text/css" href="standaard/style.css">
		<style>
			#productimg
			{
				width:300px;
				height: 400px;
				float:left;
				margin-right:40px;
			}
			#productimg img
			{
				width:100%;
				height: 100%;
			}
			#productinfo
			{
				width:320px;
				height:280px;
				float:left;
				background-color:#dddddd;
				padding-left:40px;
			}
			#bestel
			{
				float:left;
				width:308px;
				height:110px;
				background-color:#dddddd;
				padding-left:50px;
				padding-top:10px;
				border-top:2px solid black;
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
				 	
				 	<div style="margin-top:20px; float:left; width:700px;">				 	
						<div id="productimg">
							<img src="img/productimg/dvd.jpg">	 
						</div>	
						
						<div id="productinfo">
							<h3>De jotiband verrast Sinterklaas</h3>
							<table>
								<tr>
									<td style="width: 180px;">
										<b>duur</b>
									</td>
									<td>
										90 minuten
									</td>
								</tr>
								<tr>
									<td>
										<b>genre</b>
									</td>
									<td>
										komedie
									</td>
								</tr>
								<tr>
									<td>
										<b>minimum leeftijd</b>
									</td>
									<td>
										18+
									</td>
								</tr>								
							</table>
							<b>beschrijving</b><br>
							de jostieband gaat op pad in Spanje om sinterklaas een handje te helpen. 
							daarbij beleven ze de wildste avonturen
							
						</div>	
						<a href="#">
							<div id="bestel">
								Voeg toe aan winkelwagen.<br /><br />								
								<img src="img/cart.png" style="width:50px; height: 50px;"/>															
							</div>		
						</a>
					</div>
				 </div>
			 </div>
		 </div>
		 <?php
			 require('standaard/footer.php');
		 ?>
	</body>
</html>