<?php
/**
 * Modelo para los Departamentos
 */

class Departamento extends AppModel {
    var $name = 'Departamento';
    //var $useTable = 'dptos';
    var $displayField = 'nombre';
    var $belongsTo = 'Pais';
    var $hasMany = 'Ciudad';
    var $recursive = '2';
}
?>
