<?php
class AnnouncementsController extends AppController {

	var $name = 'Announcements';
	
	function index() {
		$this->Announcement->recursive = 0;
		$this->set('announcements', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid announcement', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('announcement', $this->Announcement->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Announcement->create();
			if ($this->Announcement->save($this->data)) {
				$this->Session->setFlash(__('The announcement has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The announcement could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Announcement->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid announcement', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Announcement->save($this->data)) {
				$this->Session->setFlash(__('The announcement has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The announcement could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Announcement->read(null, $id);
		}
		$users = $this->Announcement->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for announcement', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Announcement->delete($id)) {
			$this->Session->setFlash(__('Announcement deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Announcement was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
