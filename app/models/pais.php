<?php
/**
 * Modelo para los Paises
 */

class Pais extends AppModel {
    var $name = 'Pais';
    var $displayField = 'nombre';
    var $belongsTo = 'Moneda';
    var $hasMany = array('Departamento','Inmuebl');
    var $recursive = '2';
}
?>
