<?php
/**
 * Controlador para la pagina de VendeNET
 */

class VendenetController extends AppController {
    var $name = 'Vendenet';
    var $uses = array();

    function index() {
        $this->pageTitle = 'El sitio para publicar';
    }

    function beforeFilter() {
        parent::beforeFilter();

        $this->set('site', 'vendenet');
    }

    function inmuebles() {
        /**
         * @todo Hay que poner el site_id haciendo refenrencia al id del modelo site
         * que aun no se ha creado
         */
        $inmuebles = $this->Inmueble->find('all', array('conditions' => array('site_id' => 1)));
        $this->set('inmuebles', $inmuebles);
    }
}

?>
