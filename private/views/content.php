<div class="row content-wrapper">
	<?php include $GLOBALS['VIEWS_FOLDER'] . 'menu-sidebar.php';?>
	<?php
		$pages = array(
			'home'=> $GLOBALS['VIEWS_FOLDER'] . 'home/home-content.php',
			'login'=> $GLOBALS['VIEWS_FOLDER'] . 'login/login-content.php'
		);
		
		if(isset($_GET['p']))
		{
			$get = htmlspecialchars($_GET['p']);
		    if(array_key_exists($get,$pages))
		    {
		          include($pages[$get]);
		    }
		} else {
			include $pages['home'];
		}
	?>
</div>