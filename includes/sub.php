<!--<nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent22" aria-controls="navbarSupportedContent22" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>

  <div class="vertical-menu collapse navbar-collapse" id="navbarSupportedContent22">-->

    <?php 
    $st = '';
    $stilo = '';
    $stilo1 = '';
    $stilo2 = '';
    if (isset($_GET['page1'])) { 
      $stilo = 'active';
    }elseif (isset($_GET['page2'])) {
      $stilo1 = 'active';
    } elseif (isset($_GET['page3'])) {
      $stilo2 = 'active';
    }else{
      $st  = 'active';
      $stilo = null;
      $stilo1 = null;
      $stilo2 = null;
    }
    ?>
    <ul class="nav justify-content-center itm">
      <li class="nav-item <?php echo $st;?>">        
         <a class="nav-link" href="<?php echo $raiz; ?>" style="padding-left: 30px; padding-right: 30px;"><!--style="padding: 20px; padding-left: 30px; padding-right: 30px;"-->
          <span><i class="fas fa-tachometer-alt"></i></span>
          <span>Panel</span>
         </a>
      </li>
      <li class="nav-item <?php echo $stilo;?>">
        <a class="nav-link" href="<?php echo $raiz; ?>?submenu=1&page1=1/"  style="padding-left: 30px; padding-right: 30px;">
          <span><i class="fas fa-shuttle-van"></i></span>
          <span>Unidades</span>
        </a>
      </li>
      <li class="nav-item <?php echo $stilo1;?>">
        <a class="nav-link" href="<?php echo $raiz; ?>?submenu=1&page2=1/"  style="padding-left: 30px; padding-right: 30px;">
          <span><i class="fas fa-wrench"></i></span>
          <span>Servicios</span>
        </a>
      </li>
      <li class="nav-item <?php echo $stilo2;?>">
        <a class="nav-link" href="<?php echo $raiz; ?>?submenu=1&page3=1/" tabindex="-1" aria-disabled="true" style="padding-left: 30px; padding-right: 30px;">
          <span><i class="far fa-id-card"></i></span>
          <span>Operadores</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" style="padding-left: 30px; padding-right: 30px;">
          <span><i class="fas fa-users"></i></span>
          <span>Usuarios</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" style="padding-left: 30px; padding-right: 30px;">
          <span><i class="far fa-credit-card"></i></span>
          <span>Movimientos</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" style="padding-left: 30px; padding-right: 30px;">
          <span><i class="far fa-question-circle"></i></span>
          <span>Soporte</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true" style="padding-left: 30px; padding-right: 30px;">
          <span><i class="fas fa-power-off"></i></span>
          <span>Cerrar Sesion</span>
        </a>
      </li>
    </ul>
  <!--</div>
</nav>-->