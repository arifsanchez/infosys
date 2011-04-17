<?php
	class SignupsController extends AppController {
		
		var $name = 'Signups';
		var $components = array('Wizard.Wizard');
		var $uses = array('Student','StudentProfile');

		function beforeFilter() {
			$this->Wizard->steps = array('info','profile','review');
		}
		
	}

	function info() {
		debug($this);
	}

	function profile(){
		debug($this);
	}

	function review(){
		debug($this);
	}

?>
