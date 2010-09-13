<?php
/**
 * Controlador para el Inmueble
 */

class InmueblesController extends AppController {
	var $name = 'Inmuebl';
    var $uses = array('Inmuebl', 'Authake.User');
	var $scaffold = 'admin';
    var $helpers = array('Javascript');

    //Pagination
    var $paginate = array('limit' => 10, 'order' => array('modified' => 'desc'));

    function misinmuebles() {
        $this->pageTitle = 'Mis Inmuebles';

        $inmuebles = $this->Inmuebl->find('all', array(
                'fields' => array('Inmuebl.id','Inmuebl.codigo', 'Status.nombre', 'Inmuebl.titulo', 'Subcategoria.nombre'),
                'conditions' => array('Inmuebl.active' => 1, 'Inmuebl.user_id' => $this->Authake->getUserId()),
                'recursive' => 0
        ));

        $this->set('inmuebles', $inmuebles);
    }

    function publicar() {
        $this->loadModel('Categoria');
        $this->set('categorias', $this->Categoria->find('list'));

        $this->loadModel('Pais');
        $this->set('paises', $this->Pais->find('list'));

        $this->loadModel('Clima');
        $this->set('climas', $this->Clima->find('list'));

        $estratos = array('', 'Bajo', 'Medio Bajo', 'Medio', 'Medio Alto', 'Alto', 'Mas Alto');
        $this->set('estratos', $estratos);
    }

    function index(){
        $this->redirect('misinmuebles');
    }

    function add(){
        $this->Inmuebl->set('user_id', $this->Authake->getUserId());
        $this->Inmuebl->set('status_id', '1');
        $this->Inmuebl->set('active', '1');
        $this->loadModel('Pais');
        $pais = $this->Pais->findById($this->data['Inmuebl']['pais_id']);
        $this->Inmuebl->set('moneda', $pais['Moneda']['id']);

        // Le Asigno un codigo
        do {
            $codigo = $this->generarCodigo($this->data['Inmuebl']['site_id']);
        } while ($this->is_code($codigo));

        $this->Inmuebl->set('codigo', $codigo);

        if ($this->Inmuebl->save($this->data)) {
            $this->Session->setFlash(__('Aviso Guardado correctamente', true), 'success');
        } else {
            $this->Session->setFlash(__('No se pudo guardar Correctamente, vuelva a intentarlo', true), 'error');
        }
        
        $this->redirect('misinmuebles');
       
    }

    /**
     * Funcion que Genera el codigo de Inmueble
     * segun el rango destinado para ello
     */
    function generarCodigo($tipo){
        switch($tipo){
            case 1:
                $pre = rand(1,2);
                break;
            case 2:
                $pre = rand(5,6);
                break;
            case 3:
                $pre = 9;
                break;
        }

        for ($i = 0; $i < 5; $i++) {
        $code[] = rand(0,9);
        }

        $codigo = implode($code);
        
        //echo $pre.$codigo;
        return $pre.$codigo;
    }

    /**
     * Funcion que verifica la disponibilidad
     * de un codigo de inmueble determinado
     */
    function is_code($code){
       $codes = $this->Inmuebl->find('list', array('fields' => 'codigo'));
       return in_array($code, $codes);
    }


    function ver($id = null) {
        $this->loadModel('Categoria');
        $this->loadModel('Moneda');
        if ($id) {
            $inmueble =  $this->Inmuebl->find('first',array(
                    'conditions' => array('Inmuebl.id' => $id),
                    'recursive' => 1
                ));
            $inmueble['Categoria'] = array_pop($this->Categoria->findById($inmueble['Subcategoria']['categoria_id']));
            $inmueble['Moneda'] = array_pop($this->Moneda->findById($inmueble['Pais']['moneda_id']));
            //$pais = $this->Pais->findById($inmueble['Inmueble']['pais']);
            //$zona = $this->Zona->findById($inmueble['Inmueble']['zona_id']);
            $this->set('inmueble', $inmueble);
            //$this->set('ubicacion', $ubicacion);
            $estratos = array('', 'Bajo', 'Medio Bajo', 'Medio', 'Medio Alto', 'Alto', 'Mas Alto');
            $this->set('estratos', $estratos);

            $calentadores = array('--Tipo--','GAS', 'ELECTRICO', 'SOLAR');
            $this->set('calentador', $calentadores);

        }
    }
}
?>
