<?php
echo $javascript->link('jquery/jquery-1.3.2.min.js')."\n";
echo $javascript->link('jquery/babysteps.js');
echo $javascript->link('forms')."\n";
echo $form->create('Inmuebl');
?>
<div class="envoltura-caja" style="width:950px;">
<div id="step1" class="step">
    <div class="envoltura-caja-header">
    <h1 class="caja-titulo">Este es el paso Uno</h1>
    <h2 class="caja-subtitulo">Selecciona el tipo de anuncio que quieres publicar y define a que categoría pertenece</h2>
    </div>
    <div class="seleccion-caja">
        <div class="campotexto">
<?php
echo $form->input('site_id',  array(
            'options' => array('-- Tipo de Anuncio --','Vende', 'Arrienda', 'Alquila x Temporadas'),
            'after' => $html->image('loader.gif', array('class' => 'loader loader-site'))
    ));
?>
            </div>
        <div class="campotexto">
        <?php
        echo $form->input('titulo');
        ?>
        </div>
    </div>
    <?php
array_unshift($categorias, '- Seleccione una Categoria - ');
?>
<fieldset>
<legend>Categorizaci&oacute;n</legend>
<?php
echo $form->input('Categoria', array('id' => 'cat1', 'options' => $categorias, 'after' => $html->image('loader.gif', array('class' => 'loader loader-cat1'))));

echo $form->input('subcategoria_id', array(
            'id' => 'cat2', 'options' => array('- Seleccione una Categoria -')));

?>
</fieldset>
</div>

<div id="step2" class="step">
    <div class="envoltura-caja-header">
        <h1 class="caja-titulo">Este es el paso Dos</h1>
        <h2 class="caja-subtitulo">Subtitulo</h2>
</div>
<div class="seleccion-caja">
    <fieldset style="float:left; width:200px; min-height: 65px;">
<legend>Ubicaci&oacute;n</legend>
<?php
array_unshift($paises, '- Seleccione un Pais -');
echo $form->input('pais_id', array('id' => 'pais', 'options' => $paises,
        'after' => $html->image('loader.gif', array('class' => 'loader loader-pais'))
    ));

echo $form->input('departamento_id', array(
            'id' => 'dpto', 
            'div' => array('id' => 'input_dpto', 'style' => 'display:none'), 
            'after' => $html->image('loader.gif', array('class' => 'loader loader-dpto')),
            'options' => array('- Seleccione un Departamento -') 
            ));

echo $form->input('ciudad_id', array(
            'id' => 'ciudad', 
            'div' => array('id' => 'input_ciudad', 'style' => 'display:none'), 
            'after' => $html->image('loader.gif', array('class' => 'loader loader-ciudad')),
            'options' => array('- Seleccione una Ciudad -') 
            ));

echo $form->input('zona_id', array(
            'id' => 'zona', 
            'div' => array('id' => 'input_zona', 'style' => 'display:none'), 
            'options' => array('- Seleccione un Sector -')
            ));

echo $form->input('barrio', array(
            'id' => 'barrio',
            'div' => array('id' => 'input_barrio', 'style' => 'display:none'),
            ));

echo $form->input('direccion', array(
            'div' => array('id' => 'input_direccion', 'style' => 'display:none')));

?>
</fieldset>
<fieldset style="width: 430px; min-height:65px; margin-left: 10px;">
<legend>Adicional</legend>
<div id="inmuebles">
<?php
echo $form->input('estrato', array('options' => $estratos));
echo $form->input('conjunto', array('id' => 'ccerrado', 'label' => 'Es un Conjunto Cerrado?'));

echo $form->input('nombre_conjunto', array('div' => array(
                'id' => 'nconjunto', 'style' => 'display:none')));

echo $form->input('porteria', array('label' => 'Tiene Porteria?', 'div' => array(
                'id' => 'porteria','style' => 'display:none')));
?>
</div>
<div id="vehiculos">
<?php
//echo 'Modelo'.$form->year('modelo', 1970,date('Y'));
echo $form->input('modelo', array(
        'dateFormat' => 'Y', 
        'minYear' => date('Y') - 70,
        'maxYear' => date('Y')));
echo $form->input('marca');
?>
</div>
<div id="clima">
<?php echo $form->input('clima_id', array('options' => $climas)); ?>
</div>
</fieldset>
</div>
</div>

<div id="step3" class="step">
    <div class="envoltura-caja-header">
        <h1 class="caja-titulo">Este es el paso Tres</h1>
        <h2 class="caja-subtitulo">subtitulo</h2>

</div>
    <div class="seleccion-caja">
<fieldset>
<legend>Precios</legend>

<div id="venta">
<?php
/**
 * @todo Terminar Soporte para
 * usar una moneda diferente a la
 * del pais del usuario
 */
//$monedas = array(''USD', 'EUR', 'GBP');

echo $html->div('precio', 
        //$form->input('moneda_id').
        $form->input('valor_venta'));

echo $html->div('impuestos',
        //$form->input('moneda', array('options' => $monedas)).
        $form->input('otros_venta', array('label' => 'Impuestos')));
?>
</div>

<div id="arrienda">
<?php

echo $html->div('precio', 
        //$form->input('moneda', array('options' => $monedas)).
        $form->input('valor_arriendo', array('label' => 'Valor Arriendo')));

echo $html->div('admon', 
        //$form->input('moneda', array('options' => $monedas)).
        $form->input('admon_venta', array('label' => 'Administracion')));

echo $html->div('otros',
        //$form->input('moneda', array('options' => $monedas)).
        $form->input('otros_arriendo', array('label' => 'Algun Valor Adicional')));
?>

</div>

<div id ="alquila">
<fieldset>
<legend>Temporada Alta</legend>
<?php

echo $html->div('persona_alta',
        //$form->input('moneda', array('options' => $monedas)).
        $form->input('precio_alta', array('label' => 'Precio por Persona')));

echo $html->div('dia_alta',
        //$form->input('moneda', array('options' => $monedas)).
        $form->input('precio2_alta', array('label' => 'Precio por Dia')));
?>
</fieldset>
<fieldset>
<legend>Temporada Baja</legend>
<?php

echo $html->div('persona_baja',
        //$form->input('moneda', array('options' => $monedas)).
        $form->input('precio_baja', array('label' => 'Precio por Persona')));

echo $html->div('dia_baja',
        //$form->input('moneda', array('options' => $monedas)).
        $form->input('precio2_baja', array('label' => 'Precio por Dia')));
?>
</fieldset>
</div>
</fieldset>
</div>   
</div>

<div id="step4" class="step">
    <div class="envoltura-caja-header">
        <h1 class="caja-titulo">Este es el paso cuatro</h1>
        <h2 class="caja-subtitulo">Subtitulo</h2>
    </div>
    <div class="seleccion-caja">
<fieldset>
<legend>Caracteristicas</legend>
<div id="cinmuebles">
<?php
$calentadores = array('--Tipo--','GAS', 'ELECTRICO', 'SOLAR');
echo $form->input('habitaciones');
echo $form->input('cempleada');
echo $form->input('banos');
echo $form->input('telefono');
echo $form->input('estudio');
echo $form->input('amoblado');
echo $form->input('gas');
echo $form->input('calefaccion');
echo $form->input('aacondicionado');
echo $form->input('calentador_id', array('options' => $calentadores));
echo $form->input('zropas');
echo $form->input('cintegral');
echo $form->input('chimenea');
echo $form->input('deposito');
echo $form->input('gimnasio');
echo $form->input('piscina');
echo $form->input('pvisitantes');
echo $form->input('vigilancia');
echo $form->input('parqueaderos');
echo $form->input('descripcion');
echo $form->input('observaciones');
?>
</div>
</fieldset>
        </div>
</div>

<div id="step5" class="step">
    <div class="envoltura-caja-header">
        <h1 class="caja-titulo">Este es el paso cinco</h1>
        <h2 class="caja-subtitulo">Subtitulo</h2>
</div>
    <div class="seleccion-caja">
<?php
echo $form->submit('Guardar Anuncio');
echo $form->end();
?>
        </div>
</div>
</div>