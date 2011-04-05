<?php
	class SignupController extends AppController {
		
		var $components = array('Wizard.Wizard');
		var $uses = array();

		function beforeFilter() {
			$this->Wizard->steps = array('info','account','review');
		}
		
	}

	function info() {
		debug($this);
	}

	function account(){
		debug($this);
	}

	function review(){
		debug($this);
	}

?>
