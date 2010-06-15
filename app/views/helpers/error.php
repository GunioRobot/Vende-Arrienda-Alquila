<?php
/* SVN FILE: $Id: error.php 16 2006-02-03 19:53:38Z lsmoura $ */
/**
 * Error Helper class for easy management of processing errors
 *
 * ErrorHelper provides the level of control beyond checking for empty fields
 * http://wiki.cakephp.org/tutorials:complex_model_validation_routines
 * 
 * @copyright Copyright (c) 2006 Tobius <tmiller@tobymiller.com>
 * @since     Revision 1
 * @package   error
 */
class ErrorHelper extends Helper {
  /**
   * Show error message for a particular field
   * 
   * @param string $target The target field
   * @return string String containing the message to display
   */
  function showMessage($target) {
    list($model, $field) = explode('/', $target);
 
    if (isset($this->validationErrors[$model][$field]))
      return($this->validationErrors[$model][$field]);
  }
}