<?php
class UserFriendshipsController extends AppController {

	var $name = 'UserFriendships';

	function index() {
		$this->UserFriendship->recursive = 0;
		$this->set('userFriendships', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user friendship', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('userFriendship', $this->UserFriendship->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UserFriendship->create();
			if ($this->UserFriendship->save($this->data)) {
				$this->Session->setFlash(__('The user friendship has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user friendship could not be saved. Please, try again.', true));
			}
		}
		$users = $this->UserFriendship->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user friendship', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UserFriendship->save($this->data)) {
				$this->Session->setFlash(__('The user friendship has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user friendship could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UserFriendship->read(null, $id);
		}
		$users = $this->UserFriendship->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user friendship', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UserFriendship->delete($id)) {
			$this->Session->setFlash(__('User friendship deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User friendship was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>