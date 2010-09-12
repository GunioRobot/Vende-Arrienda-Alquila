<?php
/**
 * Modelo para los Departamentos
 */

class Departamento extends AppModel {
    var $name = 'Departamento';
    //var $useTable = 'dptos';
    var $displayField = 'nombre';
    var $belongsTo = 'Pais';
    var $hasMany = array('Ciudad', 'Inmuebl');
    var $recursive = '2';
}
?>
