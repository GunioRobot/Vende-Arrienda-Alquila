<?php
/**
 * Modelo para las Subcategorias
 */

class Subcategoria extends AppModel {
    var $name = 'Subcategoria';
    var $displayField = 'nombre';
    var $belongsTo = 'Categoria';
    var $hasMany = 'Inmuebl';
}
?>
