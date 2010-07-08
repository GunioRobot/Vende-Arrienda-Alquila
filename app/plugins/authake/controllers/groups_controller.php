<?php
/*
    This file is part of Authake.

    Author: Jérôme Combaz (jakecake/velay.greta.fr)
    Contributors:

    Authake is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Authake is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
*/


class GroupsController extends AuthakeAppController {

	var $name = 'Groups';
	var $helpers = array('Htmlbis', 'Form', 'Time');
    var $paginate = array(
            'limit' => 100000,
            'order' => array(
                'Group.id' => 'asc'
            )
        );
    
    var $uses = array('Authake.Group', 'Authake.Rule');

	function index($tableonly = false) {
		$this->Group->recursive = 0;
		$this->set('groups', $this->paginate());
        $this->set('tableonly', $tableonly);
	}

	function view($id = null, $viewactions = null) { 
		if (!$id) {
			$this->Session->setFlash(__('Invalid group.', true), 'warning');
			$this->redirect(array('action'=>'index'));
		}
        
        $this->set('group', $this->Group->read(null, $id));
        $this->set('rules', $this->Rule->getRules(array($id)));
                
        if ($viewactions === 'actions')
            $this->set('actions', $this->Authake->getActionsPermissions(array($id)));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Group->create();
			if ($this->Group->save($this->data)) {
				$this->Session->setFlash(__('The group has been saved', true), 'success');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The group could not be saved. Please, try again', true), 'error');
			}
		}
		($users = $this->Group->User->find('list', array("fields"=>array("User.id", "User.login"))));
		$this->set(compact('users'));
	}

	function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid group', true), 'warning');
            $this->redirect(array('action'=>'index'));
        }

        if ($id == 1 and !in_array(1, $this->Authake->getGroupIds())) {
            $this->Session->setFlash(__('You cannot edit the group administrators', true), 'warning');
            $this->redirect(array('action'=>'index'));
        }
        
		if (!empty($this->data)) {
			if ($this->Group->save($this->data)) {
				$this->Session->setFlash(__('The group has been saved', true), 'success');
			} else {
				$this->Session->setFlash(__('The group could not be saved. Please, try again.', true), 'error');
			}
            $this->redirect(array('action'=>'index'));
		}
		if (empty($this->data)) {
			$this->data = $this->Group->read(null, $id);
		}


// !!! CAKE BUG !!! should return array(array('id'=>'login), ...)
// resolved in https://trac.cakephp.org/changeset/6360
        $users = $this->Group->User->find('list', array("fields"=>array("User.id", "User.login")));
        
/*
        $users = $this->Group->User->find('all');
        $users = Set::combine($users, '{n}.User.id', '{n}.User.login');
 */
        $this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id || $id == 1) {
			$this->Session->setFlash(__('Impossible to delete this group', true), 'error');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Group->del($id)) {
			$this->Session->setFlash(__('Group deleted', true), 'success');
			$this->redirect(array('action'=>'index'));
		}
	}

}

?>