<?php
class AccessHelper extends Helper{
    var $helpers = array('Session');
    var $Access;
    var $Auth;
    var $user;
    
    function beforeRender(){
        App::import('Component', 'Access');
        $this->Access = new AccessComponent(); 

        App::import('Component', 'Auth');
        $this->Auth = new AuthComponent();
        $this->Auth->Session = $this->Session; 
        $this->user = $this->Auth->user();
    } 

	function check($aco, $action='*'){
        if(empty($this->user)) return false;
        return $this->Access->checkHelper('User:'.$this->user['User']['id'], $aco);
    } 	
	
    function isLoggedin(){
        return !empty($this->user);
    }	

    function my($column = null){
        App::import('Component', 'Auth');
        $auth = new AuthComponent();
        $auth->Session = $this->Session;
        if($auth->user($column)){
        	return $auth->user($column);
		}else{
		return FALSE;
		}
    }
	
	function isSelected($controller = null, $action = 'index'){	
		$curr_controller = $this->params['controller'];
		$curr_action = 	$this->params['action'];
		if($curr_controller == $controller && $curr_action == $action){
			return 'selected';
		} else {
			return null;
		}	
	}
}

?>
