<?php
class UserLivesController extends AppController {

	var $name = 'UserLives';

	function index() {
		$this->UserLife->recursive = 0;
		$this->set('userLives', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user life', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('userLife', $this->UserLife->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UserLife->create();
			if ($this->UserLife->save($this->data)) {
				$this->Session->setFlash(__('The user life has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user life could not be saved. Please, try again.', true));
			}
		}
		$users = $this->UserLife->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user life', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UserLife->save($this->data)) {
				$this->Session->setFlash(__('The user life has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user life could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UserLife->read(null, $id);
		}
		$users = $this->UserLife->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user life', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UserLife->delete($id)) {
			$this->Session->setFlash(__('User life deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User life was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>