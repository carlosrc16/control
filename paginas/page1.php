<ul class="nav nav-tabs muni" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Unidades</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mantenimientos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Seguros</a>
  </li>
</ul>

<div class="tab-content container-fluid" id="myTabContent">
	
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	<div class="container-fluid justify-content-center " style="padding-top: 10px;">
		<div class="" align="center" style="padding-top: 15px;">
			<div class="container-fluid" style="padding: 0px;">
				<p class="float-right">				
					<a href="/crm/?comercial=solicitud-anuncio&lista=me" class="btn btn-success"><i class="fas fa-plus"></i> Nueva unidad</a>				
				</p>
				<p class="lead lead-info float-left">Control de unidades</p>
			</div>
			<div class="container-fluid" style="padding: 0px; padding-top: 60px;">
				<form method="get"  class="form-inline justify-content-center">
					<div class="form-group mx-sm-3 mb-2">
						<input type="hidden" name="page1" value="1" />
						<input type="text" name="q" value="" class="form-control input-lg" placeholder="Número de unidad, ejemplo 84936" style="width:320px">
					</div>
					<button class="btn btn-primary mb-2" style="color: #fff;"><i class="fas fa-search"></i></button>			  
				</form>
			</div>
		   <?php 
		   if (isset($_GET['q'])) {
		   	echo "bien";
		   }
		   ?>
		</div>
	</div>
  </div>


  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum voluptate perferendis laborum explicabo velit consequatur id esse omnis ipsam nulla, exercitationem voluptatum, quasi vero, repudiandae porro voluptas. Minus, amet omnis.
  </div>


  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel eum at eligendi ullam sed earum, rerum mollitia, sapiente facilis eaque reiciendis fugit recusandae blanditiis aperiam? Libero laborum delectus unde quo.
  </div>
</div>