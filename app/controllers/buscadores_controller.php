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
            $items = $this->Inmuebl->find('all', array(
                    'conditions' => array(
                        'site_id' => $this->data['Buscador']['site_id'],
                        'subcategoria_id' => $this->data['Buscador']['subcat'],
                        'zona_id' => $this->data['Buscador']['zona']
                    )
            ));
            $this->set('results', $items);
            $p_items = $this->paginate('Inmuebl', array(
                    'site_id' => $this->data['Buscador']['site_id'],
                    'subcategoria_id' => $this->data['Buscador']['subcat'],
                    'zona_id' => $this->data['Buscador']['zona']
            ));
            $this->set('paginado', $p_items);
        }
    }
}
?>

