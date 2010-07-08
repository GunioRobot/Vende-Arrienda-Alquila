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
                'conditions' => array('ciudad_id' => $id)
            ));

        $this->set('zonas', array('items' => $zonas));
        $this->layout = 'ajax';
        Configure::write('debug', 0);
    }
}
?>
