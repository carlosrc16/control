<?php
require('config.php');
include_once('includes/head.php');
include_once('includes/menu.php');

//include_once('includes/menu.php');
?>
<div class="container-fluid" style="">
	<?php 
	//if (isset($_GET['submenu'])) { 
		include_once('paginas/submenu.php');
		//exit();
		//return;
	//}
	?>
	
</div>
<?php
include_once('includes/footer.php');
?>