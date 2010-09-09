<?php
/* 
 * Header creado por Fabian Hernandez
 */


echo $javascript->link('menu')."\n";

if ($authak3->isMemberOf(1)) {
        $menuAdmin = $html->tag('li', $html->link('Administrar', '#').
            $html->tag('ul',
            $html->tag('li', $html->link('Usuarios', '/authake')).
            $html->tag('li', $html->link('Estados', '/statuses')).
            $html->tag('li', $html->link('Monedas', '/monedas')).
            $html->tag('li', $html->link('Pais', '/paises')).
            $html->tag('li', $html->link('Departamento', '/departamentos')).
            $html->tag('li', $html->link('Ciudad', '/ciudades')).
            $html->tag('li', $html->link('Zona', '/zonas')).
            $html->tag('li', $html->link('Inmuebles', '/admin/inmuebles')),
            array('id' => 'jsddm')),
            array('class' => 'item-menu-superior', 'id' => 'Menu')
        );
    }
?>
<div class ="header-envoltura">
  <div class="menu-superior">
      <ul class="menu-superior-lista">
          <?php
          echo $html->tag('li', $html->link('Inicio', '/'), array('class' => 'item-menu-superior'));

          if ($authak3->isLogged()) {
              echo $html->tag('li', $html->link('Mis Inmuebles', '/inmuebles/misinmuebles'), array('class' => 'item-menu-superior'));
              echo $html->tag('li', $html->link('Publicar', '/inmuebles/publicar'), array('class' => 'item-menu-superior'));
              echo $html->tag('li', $html->link('Salir', '/authake/user/logout'), array('class' => 'item-menu-superior'));
          } else {
              echo $html->tag('li', $html->link('Ingresar', '/authake/user/login'), array('class' => 'item-menu-superior'));
          }

          if (isset($menuAdmin)) { echo $menuAdmin; }
          ?>
      </ul>
  </div>
  <div class="header-logo">
    <div class="header-logo-vende"></div>
    <div class="header-logo-alquila"></div>
    <div class="header-logo-arrienda"></div>
  </div>
  <div id="linea-verde">
      <ul class="menu-top">
          <li class="item-menu-top inicial"><a href="#"><span>Nosotros</span></a></li>
          <li class="item-menu-top"><a href="#"><span>Contactenos</span></a></li>
          <li class="item-menu-top"><a href="#"><span>Tarifas</span></a></li>
          <?php echo $html->tag('li', $html->link('Registrarse', '/authake/user/register'), array('class' => 'item-menu-top final')); ?>
      </ul>
  </div>
  <div class="barra-header"></div>
</div>