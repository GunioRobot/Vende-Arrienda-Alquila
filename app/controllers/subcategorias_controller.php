<?php
/**
 * Controlador para las Subcategorias
 */

class SubcategoriasController extends AppController {
    var $name = 'Subcategoria';
    var $scaffold;

    function getAll($id = null) {
        $scats = $this->Subcategoria->find('list', 
            array(
                'fields' => array('id', 'nombre'),
                'conditions' => array('categoria_id' => $id)
            ));

        $this->set('subcats', array('items' => $scats));
        $this->layout = 'ajax';
        Configure::write('debug', 0);
    }
}
?>
