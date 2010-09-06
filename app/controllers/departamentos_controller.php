<?php
/**
 * Controlador para los Departamentos
 */

class DepartamentosController extends AppController {
    var $name = 'Departamento';
    var $scaffold;

    function getAll($id = null){
        $dptos = $this->Departamento->find('list', 
            array(
                'fields' => array('id', 'nombre'),
                'order' => array('Departamento.nombre ASC'),
                'conditions' => array('pais_id' => $id)                
            ));
        $dptos = array('0' => '-Cualquiera-')+$dptos;
        $this->set('dptos', array('items' => $dptos));
        $this->layout = 'ajax';
        Configure::write('debug', 0);
    }
}
?>
