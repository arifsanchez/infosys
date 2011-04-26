<?php
class UsersController extends AppController {

	var $name = 'Users';
	
	function beforeFilter() {
		$this->Auth->allow('register','login');
		$this->Auth->userModel = 'User';
	}
	
	function register() {
			if(!empty($this->data)){
				if($this->User->validates()){
					
					//save this user sebagai super admin
					$this->data['User']['group_id'] = 1;
					$this->User->save($this->data);
					
					$data = $this->User->read();
					
					$this->Auth->login($data);
					
					$this->redirect('/');
				}
			}
	}
	
	function login(){
			
	}
	
	function logout(){
			$this->redirect($this->Auth->logout());
	}
	
	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
				
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		
		$user = $this->Auth->user();
		debug($user);
		
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
