<?php

class PagesController extends AppController{

	var $name = 'Pages';
	var $uses = null;
	
	function beforeFilter() {
		$this->Auth->allow('*');
	}
		
	function home(){
		#debug($this->Session);
	}
	
}
	
?>

