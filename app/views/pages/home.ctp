<?php
echo $javascript->link('buscador')."\n";
?>

<div class="contenido-envoltura">
  <div class="contenido-left">
  <div class="busqueda-envoltura">
  <?php echo $form->create('Buscador', array('action' => 'search')); ?>
      <label class="busqueda-titulo">Busca tu inmueble por código</label>
      <input type="text" name="data[Buscador][qcode]" class="input-busqueda" />
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
          <div class="busqueda-detallada-bloque">
          <div class="negocio-titulo">Tipo de negocio</div>
          <select class="opciones-tipo-negocio" name="data[Buscador][site_id]">
            <option class="opcion-tipo-negocio" value="0">---</option>
            <option class="opcion-tipo-negocio" value="1">Vende</option>
            <option class="opcion-tipo-negocio" value="2">Arrienda</option>
            <option class="opcion-tipo-negocio" value="3">Alquila/Temporadas</option>
          </select>
          </div>
          <div class="busqueda-detallada-bloque">
          <div class="negocio-titulo">Subcategorias</div>
<?php
$img = $html->image('loader.gif', array('class' => 'loader'));
echo $form->select('subcat', $subcats, null, array('class' => 'opciones-tipo-negocio'));
?>
          </div>
          <div class="busqueda-detallada-bloque">
          <div class="negocio-titulo">Ciudad</div>
<?php
array_unshift($ciudades, ' ');
echo $form->select('ciudad', $ciudades, null, array('id' => 'ciudad', 'class' => 'opciones-tipo-negocio'));
echo $html->image('loader.gif', array('class' => 'loader'));
?>
          </div>
          <div class="busqueda-detallada-bloque">
          <div class="negocio-titulo">Zonas</div>
          <div id="szona">
<?php //echo $form->select('zona', array('....'), array('id' => 'zonas', 'class' => 'opciones-tipo-negocio'));
      echo $form->select('zona', array('....'), null, array('id' => 'zonas', 'class' => 'opciones-tipo-negocio'));
?>
          </div>
          </div>
              <div class="boton-enviar">
                  <button class="enviar" name="enviar">Buscar</button>
              </div>
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