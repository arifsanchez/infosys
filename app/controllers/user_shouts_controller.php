<?php
class UserShoutsController extends AppController {

	var $name = 'UserShouts';

	function index() {
		$this->UserShout->recursive = 0;
		$this->set('userShouts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user shout', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('userShout', $this->UserShout->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UserShout->create();
			if ($this->UserShout->save($this->data)) {
				$this->Session->setFlash(__('The user shout has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user shout could not be saved. Please, try again.', true));
			}
		}
		$users = $this->UserShout->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user shout', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UserShout->save($this->data)) {
				$this->Session->setFlash(__('The user shout has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user shout could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UserShout->read(null, $id);
		}
		$users = $this->UserShout->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user shout', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UserShout->delete($id)) {
			$this->Session->setFlash(__('User shout deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User shout was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>