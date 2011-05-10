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
		}

	}
?>
