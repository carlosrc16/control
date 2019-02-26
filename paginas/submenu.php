<div class="row" style="">
	<div class="col-md-12" style="padding: 0px;">
		<?php include_once('includes/sub.php'); ?>
	</div>
	<div class="col-md-12" style="padding: 0px;">
		<div style="padding: 10px;">
			<?php
			if (isset($_GET['page1'])) {
				include_once('paginas/page1.php');
				return;					
			}elseif (isset($_GET['servs'])) {
				include_once('paginas/servs.php');
				return;					
			}elseif (isset($_GET['page3'])) {
				include_once('paginas/page3.php');
				return;		
			}elseif (isset($_GET['movs'])) {
				include_once('paginas/movs.php');
				return;	
			}else{
				?>
				<div class="container-fluid">
					<h5>Contenido</h5>
				</div>
				<?php
			}
			?>

		</div>
	</div>

	<!--<div class="col-md-12" style="padding: 0px;">
		
	</div>-->
</div>

<!--<h1>no</h1>-->