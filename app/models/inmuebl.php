<?php
/**
 * Modelo del Inmueble
 */

class Inmuebl extends AppModel {
    var $name = 'Inmuebl';
    var $displayField = 'titulo';
    var $recursive = 5;
    var $belongsTo = array('Subcategoria', 'Status', 'Zona', 'Ciudad',
        'Departamento', 'Pais', 'Clima');
}
?>
