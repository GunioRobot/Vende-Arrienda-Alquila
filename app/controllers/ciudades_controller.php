<?php
/**
 * Controlador para las Ciudades
 */

class CiudadesController extends AppController {
    var $name = 'Ciudad';
    var $scaffold;

    function getAll($id = null){
        $ciudades = $this->Ciudad->find('list', 
            array(
                'fields' => array('id', 'nombre'),
                'conditions' => array('departamento_id' => $id)
            ));

        $this->set('ciudades', array('items' => $ciudades));
        $this->layout = 'ajax';
        Configure::write('debug', 0);
    }
}
?>
