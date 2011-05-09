<?php
class UserAccessLogsController extends AppController {

	var $name = 'UserAccessLogs';

	function index() {
		$this->UserAccessLog->recursive = 0;
		$this->set('userAccessLogs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user access log', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('userAccessLog', $this->UserAccessLog->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UserAccessLog->create();
			if ($this->UserAccessLog->save($this->data)) {
				$this->Session->setFlash(__('The user access log has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user access log could not be saved. Please, try again.', true));
			}
		}
		$users = $this->UserAccessLog->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user access log', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UserAccessLog->save($this->data)) {
				$this->Session->setFlash(__('The user access log has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user access log could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UserAccessLog->read(null, $id);
		}
		$users = $this->UserAccessLog->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user access log', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UserAccessLog->delete($id)) {
			$this->Session->setFlash(__('User access log deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User access log was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>