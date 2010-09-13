<?php
/**
 * Controlador para los Departamentos
 */

class DepartamentosController extends AppController {
    var $name = 'Departamento';
    var $scaffold;

    function getAll($id = null){
        $this->loadModel('Inmuebl');
        $dptos_id = array_unique($this->Inmuebl->find('list', array(
                'fields' => array('Inmuebl.departamento_id')
            )));
        $dptos = $this->Departamento->find('list', 
            array(
                'fields' => array('id', 'nombre'),
                'order' => array('Departamento.nombre ASC'),
                'conditions' => array('pais_id' => $id, 'id' => $dptos_id)
            ));
        $dptos = array('0' => '-Cualquiera-')+$dptos;
        $this->set('dptos', array('items' => $dptos));
        $this->layout = 'ajax';
        Configure::write('debug', 0);
    }
}
?>
