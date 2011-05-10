<?php
	class AppController extends Controller {
		var $components = array(
			'Acl',
			'Auth',
			'Session',
			'DebugKit.Toolbar',
			'Access'
		
		);
		
		var $helpers = array(
			'Html',
			'Form',
			'Javascript',
			'Session',
			'Time',
			'Access',
			'Popup.Popup' => array('Jquery')
		);

		function beforeFilter() {
        	//Configure AuthComponent
			$this->Auth->authorize = 'actions';
			$this->Auth->allowedActions = array('*');
			$this->Auth->loginRedirect = array('controller' => 'users','action' => 'user_login'); 
			$this->Auth->logoutRedirect = array('controller' => 'pages','action' => 'home'); 
		}

	}
?>
