<?php
/**
 * Modelo Para las Zonas
 */

class Zona extends AppModel {
    var $name = 'Zona';
    var $displayField = 'nombre';
    var $belongsTo = 'Ciudad';
}
?>
