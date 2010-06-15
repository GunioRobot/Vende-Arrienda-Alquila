<h2>Mis Inmuebles</h2>
<p>
<?php echo $html->link('Publicar Inmueble', 'publicar'); ?>
<table>
<tr>
<th>Codigo</th>
<th>Estado</th>
<th>Titulo</th>
<th>Tipo</th>
<?php foreach($inmuebles as $i){ ?>
<tr>
<td><?php echo $i['Inmuebl']['codigo']; ?></td>
<td><?php echo $i['Status']['nombre']; ?></td>
<td><?php echo $html->link($i['Inmuebl']['titulo'], 'ver/'.$i['Inmuebl']['id']); ?></td>
<td><?php echo $i['Subcategoria']['nombre']; ?></td>
</tr>
<?php } ?>
</table>
