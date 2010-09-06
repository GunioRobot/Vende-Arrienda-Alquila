<?php
/**
 * Controlador para el Buscador
 */

class BuscadoresController extends AppController {
    var $name = 'Buscadores';

    function search() {
        Configure::write('debug', 3);
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
            debug($this->data);
            $this->loadModel('Pais');
            $this->loadModel('Zona');
            $condiciones = array();

            
            if ($this->data['Buscador']['site_id'] != 0) {
                $condiciones['site_id'] = $this->data['Buscador']['site_id'];
            }

            if ($this->data['Buscador']['subcat'] != 0) {
                $condiciones['subcategoria_id'] = $this->data['Buscador']['subcat'];
            }

            if ($this->data['Buscador']['pais'] != 0 && $this->data['Buscador']['departamento'] == 0 ) {
                $zonas_id = array();
                $Pais = $this->Pais->find('first', array('conditions' =>
                        array('Pais.id' => $this->data['Buscador']['pais'])));
                foreach($Pais['Departamento'] as $dpto) {
                    if (!empty($dpto)) {
                    foreach($dpto['Ciudad'] as $ciudad) {
                            $zonas = $this->Zona->findAllByCiudadId($ciudad['id'], array('recursive' => 0));
                            if (!empty($zonas)) {
                            foreach ($zonas as $zona) {
                                $zonas_id[] = $zona['Zona']['id'];
                            }}
                        }
                    }
                }
                $condiciones['zona_id'] = $zonas_id;
            }

            if ($this->data['Buscador']['departamento'] != 0 && $this->data['Buscador']['ciudad'] == 0) {
                $otr = $this->Zona->Ciudad->Departamento->find('first', array(
                        'conditions' => array('Departamento.id' => $this->data['Buscador']['departamento']),
                    ));
                foreach($otr['Ciudad'] as $ciudad) {
                    foreach($ciudad['Zona'] as $zona) {
                        $zonas_id[] = $zona['id'];
                    }
                }
                $condiciones['zona_id'] = $zonas_id;
            }

            if ($this->data['Buscador']['ciudad'] != 0 &&  $this->data['Buscador']['zona'] == 0) {
                $zonas_id = $this->Zona->find('list', array(
                        'conditions' => array('ciudad_id' => $this->data['Buscador']['ciudad']),
                        'fields' => array('Zona.id')
                    ));
                $condiciones['zona_id'] = $zonas_id;
            }

            if ($this->data['Buscador']['zona'] != 0) {
                $condiciones['zona_id'] = array($this->data['Buscador']['zona']);
            }   

            $condiciones['site_id'] = $this->data['Buscador']['site_id'];

            debug($condiciones);

            $items = $this->Inmuebl->find('all', array('conditions' => $condiciones));
            $this->set('results', $items);
            
            $p_items = $this->paginate('Inmuebl', $condiciones);
            $this->set('paginado', $p_items);
        }
    }
}
?>