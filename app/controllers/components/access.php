<?php
class AccessComponent extends Object{
    var $components = array('Acl', 'Auth');
  
	// Aro dalam format User:$id
	function check($aco, $action='*'){
		// check($Aro,$Aco,$Action)
		if( $this->Acl->check('User:'.$this->Auth->user('id'), $aco, $action)){
			return true;
		} else {
			return false;
		}
	}
	
	function checkHelper($aro, $aco){
		App::import('Component', 'Acl');
		$acl = new AclComponent();
		return $acl->check($aro, $aco, '*');
	} 
}

?>
