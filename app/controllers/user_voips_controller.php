<?php
class UserVoipsController extends AppController {

	var $name = 'UserVoips';

	function index() {
		$this->UserVoip->recursive = 0;
		$this->set('userVoips', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user voip', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('userVoip', $this->UserVoip->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UserVoip->create();
			if ($this->UserVoip->save($this->data)) {
				$this->Session->setFlash(__('The user voip has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user voip could not be saved. Please, try again.', true));
			}
		}
		$users = $this->UserVoip->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user voip', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UserVoip->save($this->data)) {
				$this->Session->setFlash(__('The user voip has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user voip could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UserVoip->read(null, $id);
		}
		$users = $this->UserVoip->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user voip', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UserVoip->delete($id)) {
			$this->Session->setFlash(__('User voip deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User voip was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>