<?php
/**
 * Controlador para las Zonas
 */

class ZonasController extends AppController {
    var $name = 'Zona';
    var $scaffold;

    function getAll($id = null) {
        $zonas = $this->Zona->find('list', 
            array(
                'fields' => array('id', 'nombre'),
                'conditions' => array('ciudad_id' => $id),
                'order' => array('Zona.nombre ASC')
            ));
        $zonas = array('0' => '-Cualquiera-')+$zonas;
        $this->set('zonas', array('items' => $zonas));
        $this->layout = 'ajax';
        Configure::write('debug', 0);
    }
}
?>
