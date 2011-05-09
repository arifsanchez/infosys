<?php
class UserContactsController extends AppController {

	var $name = 'UserContacts';

	function index() {
		$this->UserContact->recursive = 0;
		$this->set('userContacts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user contact', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('userContact', $this->UserContact->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UserContact->create();
			if ($this->UserContact->save($this->data)) {
				$this->Session->setFlash(__('The user contact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user contact could not be saved. Please, try again.', true));
			}
		}
		$users = $this->UserContact->User->find('list');
		$userVoips = $this->UserContact->UserVoip->find('list');
		$this->set(compact('users', 'userVoips'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user contact', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UserContact->save($this->data)) {
				$this->Session->setFlash(__('The user contact has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user contact could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UserContact->read(null, $id);
		}
		$users = $this->UserContact->User->find('list');
		$userVoips = $this->UserContact->UserVoip->find('list');
		$this->set(compact('users', 'userVoips'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user contact', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UserContact->delete($id)) {
			$this->Session->setFlash(__('User contact deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User contact was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>