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
			}elseif (isset($_GET['page2'])) {
				include_once('paginas/page2.php');
				return;					
			}elseif (isset($_GET['page3'])) {
				include_once('paginas/page3.php');
				return;					
			}else{
				?>
				<!--<h4>contenido</h4>-->
				<div class="container-fluid">
					<h5>Contenido</h5>
				</div>








				<?php
			}
			?>

		</div>
	</div>
</div>

<!--<h1>no</h1>-->