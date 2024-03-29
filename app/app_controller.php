<?php
/* SVN FILE: $Id$ */
/**
 * Short description for file.
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright (c)    2006, Cake Software Foundation, Inc.
 *                              1785 E. Sahara Avenue, Suite 490-204
 *                              Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright       Copyright (c) 2006, Cake Software Foundation, Inc.
 * @link                http://www.cakefoundation.org/projects/info/cakephp CakePHP Project
 * @package         cake
 * @subpackage      cake.cake
 * @since           CakePHP v 0.2.9
 * @version         $Revision$
 * @modifiedby      $LastChangedBy$
 * @lastmodified    $Date$
 * @license         http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * This is a placeholder class.
 * Create the same file in app/app_controller.php
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package     cake
 * @subpackage  cake.cake
 */

class AppController extends Controller {
    var $components = array('Authake', 'Session');
    var $helpers = array('Html', 'Form', 'Authake.Authak3', 'Javascript');

    function beforeFilter() { //pr($this);
		parent::beforeFilter();

        $this->Authake->beforeFilter($this);

        $this->loadModel('Inmueble');

        return true;
    } // end beforeFilter()
    
    function findIp() {
        if(getenv("HTTP_CLIENT_IP"))
            return getenv("HTTP_CLIENT_IP"); 
        elseif(getenv("HTTP_X_FORWARDED_FOR"))
            return getenv("HTTP_X_FORWARDED_FOR"); 
        else 
            return getenv("REMOTE_ADDR"); 
    } 
    
}
?>
