<?php
class UserShoutRepliesController extends AppController {

	var $name = 'UserShoutReplies';

	function index() {
		$this->UserShoutReply->recursive = 0;
		$this->set('userShoutReplies', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user shout reply', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('userShoutReply', $this->UserShoutReply->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UserShoutReply->create();
			if ($this->UserShoutReply->save($this->data)) {
				$this->Session->setFlash(__('The user shout reply has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user shout reply could not be saved. Please, try again.', true));
			}
		}
		$users = $this->UserShoutReply->User->find('list');
		$userShouts = $this->UserShoutReply->UserShout->find('list');
		$this->set(compact('users', 'userShouts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user shout reply', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UserShoutReply->save($this->data)) {
				$this->Session->setFlash(__('The user shout reply has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user shout reply could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UserShoutReply->read(null, $id);
		}
		$users = $this->UserShoutReply->User->find('list');
		$userShouts = $this->UserShoutReply->UserShout->find('list');
		$this->set(compact('users', 'userShouts'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user shout reply', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UserShoutReply->delete($id)) {
			$this->Session->setFlash(__('User shout reply deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User shout reply was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>