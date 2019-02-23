<ul class="nav nav-tabs muni" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Gastos Administrativos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Gastos Operativos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Otros</a>
  </li>
</ul>

<div class="tab-content container-fluid" id="myTabContent">
	
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	<div class="container-fluid " style="padding-top: 10px;">
		<div class="" align="center" style="padding-top: 15px;">
			<div class="container-fluid" style="padding: 0px;" style="background: #eee;">
				<p class="float-right">				
					<a href="/control/?submenu=1&movs=1&add=gastoAdmin" class="btn btn-success"><i class="fas fa-plus"></i> Categorias</a>				
				</p>
				<p class="lead lead-info float-left">Gastos Administrativos</p>

							
			</div>
		</div>

		
	</div>
	<div class="container-fluid" style="padding-top: 50px; width: 100%;">		
		<?php 
		if (isset($_GET['add']) && $_GET['add'] == 'gastoAdmin') {
			include_once('paginas/adcatadmn.php');
			exit();
		} 
		?>
	</div>

	<div class="container-fluid" style="padding-top: 50px; width: 100%;">
		<div class="card bg-light mb-3" style="width: 100%;">
			<div class="card-header">
	         Listado de Gastos<span class="" style="float: right;"><i class="fas fa-plus"></i></span>
	      </div>
			<div class="card-body" style="padding: 0px;">
				<!--<h5 class="card-title">Light card title</h5>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
				<table class="table table-striped table-bordered table-sm " style="padding: 0px; margin: 0px;">
					<thead>
						<th>Clave</th>
						<th>Descripcion</th>
						<th>Monto</th>
						<th>Fecha</th>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
  </div>


  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	<div class="container-fluid justify-content-center " style="padding-top: 10px;">
		<div class="" align="center" style="padding-top: 15px;">
			<div class="container-fluid" style="padding: 0px;">
				<p class="float-right">				
					<a href="/crm/?comercial=solicitud-anuncio&lista=me" class="btn btn-success"><i class="fas fa-plus"></i> Categorias</a>				
				</p>
				<p class="lead lead-info float-left">Gastos Operativos</p>
			</div>
		</div>
	</div>
  </div>


  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
	<div class="container-fluid justify-content-center " style="padding-top: 10px;">
		<div class="" align="center" style="padding-top: 15px;">
			<div class="container-fluid" style="padding: 0px;">
				<p class="float-right">				
					<a href="/crm/?comercial=solicitud-anuncio&lista=me" class="btn btn-success"><i class="fas fa-plus"></i> Categorias</a>				
				</p>
				<p class="lead lead-info float-left">Otros Gastos|</p>
			</div>
		</div>
	</div>
  </div>
</div>