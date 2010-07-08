<?php
//var_dump($paginado);
///echo $paginator->sort('ID', 'id');
/**
echo $paginator->numbers();
echo $paginator->prev('« Anterior ', null, null, array('class' => 'disabled'));
echo $paginator->next(' Siguiente »', null, null, array('class' => 'disabled'));
echo $paginator->counter(array('separator' => ' de '));
 */
?>
<hr>
<table>
<tr>
    <th>Titulo</th>
    <th>Subcategoria</th>
    <th>Ubicacion</th>
    <th>Estado</th>
</tr>
<?php foreach($results as $r) { ?>
<tr>
    <td><?php echo $html->link($r['Inmuebl']['titulo'], array('controller' => 'inmuebles', 'action' => 'ver/'.$r['Inmuebl']['id'])); ?></td>
    <td><?php echo $r['Subcategoria']['nombre']; ?></td>
    <td><?php echo $r['Zona']['nombre'].', '.$r['Zona']['Ciudad']['nombre']; ?></td>
    <td><?php echo $r['Status']['nombre']; ?></td>
</tr>
<?php } ?>
</table>

