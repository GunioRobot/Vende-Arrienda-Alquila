<?php
/**
 * Modelo para el clima
 */

class Clima extends AppModel {
    var $name = 'Clima';
    var $displayField = 'nombre';
    var $hasMany = 'Inmuebl';
}

?>
