<?php
echo $javascript->link('buscador')."\n";
?>

<div class="contenido-envoltura">
  <div class="contenido-left">
      <div class="envoltura-caja" style="width:420px;">
      <div class="envoltura-caja-header">
      <h1 class="caja-titulo">Busca tu inmueble por código</h1>
      </div>
          <div class="envoltura-caja-contenido">
  <?php echo $form->create('Buscador', array('action' => 'search')); ?>
       <input type="text" name="data[Buscador][qcode]" class="input-busqueda" />
                   <button class="enviar" name="enviar">Buscar</button>
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
          <select id="BuscadorSitio" class="opciones-tipo-negocio" name="data[Buscador][site_id]">
            <option class="opcion-tipo-negocio" value="1">Vender</option>
            <option class="opcion-tipo-negocio" value="2">Arrienda o Alquila</option>
            <option class="opcion-tipo-negocio" value="3">Alquila por Temporadas</option>
          </select>
          </div>
          <div class="busqueda-detallada-bloque">
          <div class="negocio-titulo">Categorias</div>
<?php
echo $form->select('subcat', $subcats, null, array('class' => 'opciones-tipo-negocio'));
?>
          </div>
          <div class="busqueda-detallada-bloque" id="paises">
              <div class="negocio-titulo">Pa&iacute;s&nbsp;&nbsp;&nbsp;
<?php echo $html->image('loader.gif', array('class' => 'pais-loader'));?></div>

<?php
$paises = array('0' => '-Cualquiera-')+$paises;
echo $form->select('pais', $paises, 0, array('class' => 'opciones-tipo-negocio'), false);
?>
          </div>
          <div class="busqueda-detallada-bloque" style="display:none;" id="dptos">
          <div class="negocio-titulo">Departamentos&nbsp;&nbsp;&nbsp;
<?php echo $html->image('loader.gif', array('class' => 'dpto-loader'));?></div>
<?php
echo $form->select('departamento', array('Cargando...'), null, array('class' => 'opciones-tipo-negocio'));
?>
          </div>
          <div class="busqueda-detallada-bloque" style="display:none;" id="ciudades">
          <div class="negocio-titulo">Ciudad&nbsp;&nbsp;&nbsp;
<?php echo $html->image('loader.gif', array('class' => 'ciudad-loader'));?></div>
<?php
echo $form->select('ciudad', array('Cargando...'), null, array('class' => 'opciones-tipo-negocio'));
?>
          </div>
          <div class="busqueda-detallada-bloque" style="display:none;" id="zonas">
          <div class="negocio-titulo">Zonas</div>
<?php echo $form->select('zona', array('Cargando...'), null, array('class' => 'opciones-tipo-negocio')); ?>
          </div>

          <div class="busqueda-detallada-bloque" style="display:none;" id="precios">
          <div class="negocio-titulo">Precio Minimo</div><?php echo $form->text('price-min'); ?>
          <div class="negocio-titulo">Precio Maximo</div><?php echo $form->text('price-max'); ?>
          </div>
          
          <div class="busqueda-detallada-bloque" style="display:none;" id="alcobas">
          <div class="negocio-titulo">Numero de Alcobas</div><?php echo $form->text('alcobas'); ?>
          </div>

          <div class="busqueda-detallada-bloque" style="display:none;" id="capacidad">
          <div class="negocio-titulo">Capacidad de Personas</div><?php echo $form->text('capacidad'); ?>
          </div>

          <div class="busqueda-detallada-bloque" style="display:none;" id="modelo">
          <div class="negocio-titulo">Modelo</div><?php echo $form->text('capacidad'); ?>
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
  <div class="envoltura-caja bienvenida">
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