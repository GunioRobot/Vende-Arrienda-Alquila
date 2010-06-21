<?php
/* 
 * Header creado por Fabian Hernandez
 */

?>
<div class ="header-envoltura">
  <div class="menu-superior">
      <ul class="menu-superior-lista">
          <?php
          echo $html->tag('li', $html->link('Inicio', '/'), array('class' => 'item-menu-superior'));
          echo $html->tag('li', $html->link('Ingresar', '/authake/user/login'), array('class' => 'item-menu-superior'));
          echo $html->tag('li', $html->link('Registrarse', '/authake/user/register'), array('class' => 'item-menu-superior'));
          ?>
      </ul>
  </div>
  <div class="header-logo">
    <div class="header-logo-vende"></div>
    <div class="header-logo-alquila"></div>
    <div class="header-logo-arrienda"></div>
  </div>
  <div class="header-envoltura-menu-top">
      <ul class="menu-top">
          <li class="item-menu-top"><a href="#"><span>Nosotros</span></a></li>
          <li class="item-menu-top"><a href="#"><span>Contactenos</span></a></li>
          <li class="item-menu-top"><a href="#"><span>Tarifas</span></a></li>
          <li class="item-menu-top"><a href="#"><span>Registrarse</span></a></li>
      </ul>
  </div>
  <div class="barra-header"></div>
</div>