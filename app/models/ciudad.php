<?php
/**
 * Modelo para las Ciudades
 */

class Ciudad extends AppModel {
    var $name = 'Ciudad';
    var $displayField = 'nombre';
    var $belongsTo = 'Departamento';
    var $hasMany = array('Zona', 'Inmuebl');
    var $recursive = '2';
}
?>
