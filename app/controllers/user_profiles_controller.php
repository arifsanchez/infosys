<?php
class UserProfilesController extends AppController {

	var $name = 'UserProfiles';

	function index() {
		$this->UserProfile->recursive = 0;
		$this->set('userProfiles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user profile', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('userProfile', $this->UserProfile->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UserProfile->create();
			if ($this->UserProfile->save($this->data)) {
				$this->Session->setFlash(__('The user profile has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user profile could not be saved. Please, try again.', true));
			}
		}
		$users = $this->UserProfile->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user profile', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UserProfile->save($this->data)) {
				$this->Session->setFlash(__('The user profile has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user profile could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UserProfile->read(null, $id);
		}
		$users = $this->UserProfile->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user profile', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UserProfile->delete($id)) {
			$this->Session->setFlash(__('User profile deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User profile was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>