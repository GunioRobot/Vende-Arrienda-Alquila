<?php
/**
 * Controlador para el Buscador
 */

class BuscadoresController extends AppController {
    var $name = 'Buscadores';

    function search() {
        $this->loadModel('Inmuebl');

        $this->pageTitle = 'Resultados';

        //var_dump($this->data);

        /**
         * Busqueda por Codigo
         */
        if (!empty($this->data['Buscador']['qcode'])) {
            $qcode = (int)$this->data['Buscador']['qcode'];
            // Guardo el codigo en el modelo
            $this->Buscador->set('busqueda', $qcode);
            // Guardo la IP en el modelo
            $this->Buscador->set('ip', $this->findIp());
            // Guardo el modelo en la BD
            $this->Buscador->save();
            // Busco el inmueble que tenga ese codigo
            $result = $this->Inmuebl->findByCodigo($qcode);

            if ($result) {
                // Envio a la vista del resultado
                $this->redirect(array(
                        'controller' => 'inmuebles',
                        'action' => 'ver/'.$result['Inmuebl']['id']));
            }
        }

        /**
         * Busqueda por Criterios
         */
        if ($this->data['Buscador']['site_id'] != 0) {
            $condiciones = array();
            
            if ($this->data['Buscador']['site_id'] != 0) {
                $condiciones['Inmuebl.site_id'] = $this->data['Buscador']['site_id'];
            }

            if ($this->data['Buscador']['subcat'] != 0) {
                $condiciones['Inmuebl.subcategoria_id'] = $this->data['Buscador']['subcat'];
            }

            if ($this->data['Buscador']['pais'] != 0) {
                $condiciones['Inmuebl.pais_id'] = $this->data['Buscador']['pais'];
            }

            if ($this->data['Buscador']['departamento'] != 0) {
                $condiciones['Inmuebl.departamento_id'] = $this->data['Buscador']['departamento'];
            }

            if ($this->data['Buscador']['ciudad'] != 0) {
                $condiciones['Inmuebl.ciudad_id'] = $this->data['Buscador']['ciudad'];
            }

            if ($this->data['Buscador']['zona'] != 0) {
                $condiciones['Inmuebl.zona_id'] = array($this->data['Buscador']['zona']);
            }

            $items = $this->Inmuebl->find('all', array(
                'fields' => array('Inmuebl.id', 'Inmuebl.codigo', 'Inmuebl.titulo',
                    'Subcategoria.nombre', 'Zona.nombre', 'Ciudad.nombre', 'Status.nombre'),
                'conditions' => $condiciones));
            $this->set('results', $items);
            
            //$p_items = $this->paginate('Inmuebl', $condiciones);
            //$this->set('paginado', $p_items);
        }
    }
}
?>