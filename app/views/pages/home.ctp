<div class="contenido-envoltura">
  <div class="contenido-left">
  <div class="busqueda-envoltura">
      <label class="busqueda-titulo">Busca tu inmueble por código</label><input type="text" class="input-busqueda" />
      <div class="envoltura-caja-contenido-busqueda">
      <div class="boton-enviar">
                  <button class="enviar" name="enviar">Buscar</button>
      </div>
      </div>
  </div>
  <div class="envoltura-busqueda-detallada">
      <div class="envoltura-caja-header">
        <h1 class="caja-titulo">Busqueda Detallada</h1>
      </div>
      <div class="envoltura-caja-contenido">
          <p></p>
          <form class="formulario" name="busqueda-detallada">
          <div class="busqueda-detallada-bloque">
          <div class="negocio-titulo">Tipo de negocio</div>
          <select class="opciones-tipo-negocio">
              <option class="opcion-tipo-negocio">opcion1</option>
              <option class="opcion-tipo-negocio">opcion2</option>
              <option class="opcion-tipo-negocio">opcion3</option>
          </select>
          </div>
          <div class="busqueda-detallada-bloque">
          <div class="negocio-titulo">Subcategorias</div>
          <select class="opciones-tipo-negocio">
              <option class="opcion-tipo-negocio">opcion1</option>
              <option class="opcion-tipo-negocio">opcion2</option>
              <option class="opcion-tipo-negocio">opcion3</option>
          </select>
          </div>
          <div class="busqueda-detallada-bloque">
          <div class="negocio-titulo">Ciudad</div>
          <select class="opciones-tipo-negocio">
              <option class="opcion-tipo-negocio">opcion1</option>
              <option class="opcion-tipo-negocio">opcion2</option>
              <option class="opcion-tipo-negocio">opcion3</option>
          </select>
          </div>
              <div class="boton-enviar">
                  <button class="enviar" name="enviar">Buscar</button>
              </div>
          </form>
      </div>
  </div>
         <div class="busqueda-envoltura">

      <div class="banner-todos">

      </div>
  </div>
  </div>
  <div class="contenido-right">
  <div class="envoltura-caja">
      <div class="envoltura-caja-header">
        <h1 class="caja-titulo">Bienvenido</h1>
      </div>
      <div class="envoltura-caja-contenido">
      <p class="caja-contenido">Publica fácilmente el inmueble que quieras vender arrendar o alquilar</p>
      <p class="caja-contenido">Experimenta una nueva alternativa para encontrar vivienda</p>
      <p class="caja-contenido">Registrate gratis y comienza a usar los beneficios de esta innovadora herramienta</p>
      </div>
  </div>
      <div class="envoltura-caja">
      <div class="envoltura-caja-header">
        <h1 class="caja-titulo">Últimas Noticias</h1>
      </div>
      <div class="envoltura-caja-contenido">
      <ul class="lista-noticias">
          <li class="item-noticia"><a href="#">Noticia 1...</a></li>
          <li class="item-noticia"><a href="#">Noticia 2...</a></li>
          <li class="item-noticia"><a href="#">Noticia 3...</a></li>
      </ul>
      </div>
  </div>
      <div class="envoltura-caja">

            <div class="envoltura-caja-header">
            <h1 class="caja-titulo">Siguenos</h1>
            </div>
            <div class="envoltura-caja-contenido">
                <div class="envoltura-redes-sociales-menu">
                <ul class="lista-redes-sociales">
                    <li class="item-redes-sociales"><?php echo $html->image('facebook.png',
                                array('alt' => 'Siguenos en Facebook',
                                      'url' => '#')); ?>
                    </li>
                    <li class="item-redes-sociales"><?php echo $html->image('twitter.png',
                                array('alt' => 'Siguenos en Twitter',
                                      'url' => '#')); ?>
                    </li>
                    <li class="item-redes-sociales"><?php echo $html->image('delicious.png',
                                array('alt' => 'Agreganos a tu Delicious',
                                      'url' => '#')); ?>
                    </li>
                    <li class="item-redes-sociales"><?php echo $html->image('flickr.png',
                                array('alt' => 'Nuestras Fotos en Flickr',
                                      'url' => '#')); ?>
                    </li>
                    <li class="item-redes-sociales"><?php echo $html->image('feed.png',
                                array('alt' => 'Siguenos usando RSS',
                                      'url' => '#')); ?>
                    </li>
                </ul>
            </div>
            </div>

      </div>
  </div>
</div>

<?php
echo $javascript->link('buscador')."\n";
?>
<h2>Bienvenido al Sistema Vende.net</h2>

<div id="banners">
<?php
echo $html->image('vendelog.gif', array(
        'alt' => 'Vende.NET', 
        'url' => array('controller' => 'vendenet')));

echo $html->image('alquila.gif', array(
        'alt' => 'Alquila.NET', 
        'url' => array('controller' => 'alquilanet')));

echo $html->image('arrienda.gif', array(
        'alt' => 'Arrienda.NET', 
        'url' => array('controller' => 'arriendanet')));
?>
</div>

<?php echo $form->create('Buscador', array('action' => 'search')); ?>

<div id="box" style="width:450px;">
Busqueda por Codigo 
<input id="BuscadorQcode" type="text" value="" name="data[Buscador][qcode]" />
<input type="submit" value="Buscar!" />
</div>

<div id="box" style="width:350px;">
Busqueda Detallada
<p>Tipo de Negocio: 
<select name="data[Buscador][site_id]">
    <option value="0">---</option>
    <option value="1">Vende</option>
    <option value="2">Arrienda</option>
    <option value="3">Alquila/Temporadas</option>
</select></p>
<?php

array_unshift($ciudades, ' ');

$img = $html->image('loader.gif', array('class' => 'loader'));

echo $form->input('subcat', array('label' => 'Subcategorias', 'options' => $subcats));
echo $form->input('ciudad', array('id' => 'ciudad', 'options' => $ciudades, 'after' => $img));
echo $form->input('zona', array('id' => 'zonas', 'options' => array('...'), 'div' => array('id' => 'szona')));
?>
<input type="submit" value="Buscar!" />
</div>
</form>
<div id="login_box">
<?php

/**
 * Codigo para la posteridad

if ($authak3->isLogged()) {
    echo "<i>Identificado como: <strong>".$authak3->getLogin()."</strong> que pertenece a los grupos <strong>".implode(', ', $authak3->getGroupNames())."</strong></i><br/><br/>";
    
    echo $html->link("Centro de Administracion de Usuarios", "/authake")."<br /><br />";
	echo $html->link("Administracion de Estados de Inmueble", "/statuses")."<br /><br />";
    //echo $html->tag('hr', null, array('style' => 'width: 20%;'));
    echo $html->link("Gestion de Zonas", "/zonas")."<br /><br />";
    echo $html->link("Gestion de Ciudades", "/ciudades")."<br /><br />";
    echo $html->link("Gestion de Departamentos", "/departamentos")."<br /><br />";
    echo $html->link("Gestion de Paises", "/paises")."<br /><br />";
    echo $html->link("Gestion de Monedas", "/monedas")."<br /><br />";
    echo $html->link("Gestion de Climas", "/climas")."<br /><br />";
    echo $html->link("Perfil de Usuario", "/authake/user/")."<br/>";
    echo $html->link("Mis Inmuebles", "/inmuebles/misinmuebles")."<br />";
    echo $html->link("Salir del Sistema", "/authake/user/logout")."<br/>";
} else {
    //echo $html->link("Entrar al Sistema", "/authake/user/login")."<br/>";
    echo $html->link("Registrarse", "/authake/user/register")."<br/>";
    //echo $html->link("Confirmar Registro", "/authake/user/confirmregister")."<br/>";
}
        
*/
?>

<!-- 
<h3>Usuarios de Demostracion</h3>
<ul>
    <li>admin/admin : Administrator</li>
    <li>acluser/acluser : Gestor de Acceso (puede ver usuarios/grupos/reglas, y podra editar/borrar)</li>
    <li>otheruser/otheruser : Usuario de prueba en grupo 'Other test group'</li>
    <li>simpleuser/simpleuser : Usuario de prueba sin grupos (guest)</li>
</ul>
<?php        

echo "<h3>Algunas Pruebas...</h3>";
echo $html->link("Lista de Reglas", "/authake/rules/index")." (Permitido a cualquiera)<br/>";
echo $html->link("Lista de Usuarios", "/authake/users/index")." (Permitido solo para los Gestores de Acceso)<br/>";
echo $html->link("Ver usuario n°1", "/authake/users/view/1")." (idem)<br/>";
echo $html->link("Editar usuario n°1", "/authake/users/edit/1")." (Solamente para el Administrador)<br/>";

?>
-->
