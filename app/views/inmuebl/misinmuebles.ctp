<div class="envoltura-caja" style="width:950px;">
<div class="envoltura-caja-header">

<h1 class="caja-titulo">Mis Inmuebles</h1>
<h2 class="caja-subtitulo">Esos son los inmuebles actualmente activos</h2>
</div>
    <div id="tabla-envoltura">
<table id="tabla">
<tr id="header-tabla">
<th>Codigo</th>
<th>Estado</th>
<th>Titulo</th>
<th>Tipo</th>
<?php foreach($inmuebles as $i){ ?>
<tr class="body-tabla">
<td><?php echo $i['Inmuebl']['codigo']; ?></td>
<td><?php echo $i['Status']['nombre']; ?></td>
<td><?php echo $html->link($i['Inmuebl']['titulo'], 'ver/'.$i['Inmuebl']['id']); ?></td>
<td><?php echo $i['Subcategoria']['nombre']; ?></td>
</tr>
<?php } ?>
</table>
        </div>
    <!-- ><div class="enviar" > -->
    <div class="boton-enviar" style="margin: 20px 0 10px 0;">
        <button class="enviar" name="enviar"><?php echo $html->link('Publicar Inmueble', 'publicar'); ?></button>
    </div>
        <!--></div>-->
</div>

