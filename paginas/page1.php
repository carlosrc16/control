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
		<!--<div class="card border-secondary mb-3" style="max-width: 50rem;">
			<div class="card-header">Header</div>
			<div class="card-body text-secondary">
				<h5 class="card-title">Secondary card title</h5>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			</div>
		</div>-->
		<div class="" align="center" style="padding-top: 15px;">
		   <!--<form method="get" class="form-inline">
		      <input type="hidden" name="comercial" value="solicitud-cambio-precios" />
		      <input type="text" name="q" value="" class="form-control input-lg" placeholder="Número de unidad, ejemplo 84936" style="width:320px" />
		      <button class="btn btn-info btn-lg"><i class="fas fa-search"></i></button>
		   </form>-->

		   <form method="get"  class="form-inline justify-content-center">
			  <div class="form-group mx-sm-3 mb-2">
			  	<input type="hidden" name="page1" value="1" />
			    <input type="text" name="q" value="" class="form-control input-lg" placeholder="Número de unidad, ejemplo 84936" style="width:320px">
			  </div>
			  <button class="btn btn-primary mb-2" style="color: #fff;"><i class="fas fa-search"></i></button>
			  <!--<button type="submit" class="btn btn-primary mb-2">Confirm identity</button>-->
			</form>

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