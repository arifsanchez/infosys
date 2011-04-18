<?php
	class AppController extends Controller {
		var $components = array(
			'Auth',
			'Session',
			'DebugKit.Toolbar'
		
		);
		
		var $helpers = array(
			'Html',
			'Form',
			'Javascript',
			'Session',
			'Time'
		);

		function beforeFilter() {
        	//Configure AuthComponent
        	$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
			$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
		    $this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'home');
			$this->Auth->loginError = "Sorry, you have wrong access credentials.";
			
			$this->set('username', $this->Auth->user('username'));
		}
	}
?>
