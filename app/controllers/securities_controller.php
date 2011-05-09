<?php
class SecuritiesController extends AppController {

	var $name = 'Securities';
	var $uses = null;
	
    function beforeFilter() {  
        // we need to temporarily allow access during the setup
        $this->Auth->allow( 'index' ); 
    }

    // Add and remove controller actions for Aco
	function index() {

        if (!empty($this->data)) {
            $this->__processActions();            
        }
    	$this->__getActions();
    }
	
	// Add or delete actions
	function __processActions() {

        $securityAccess = $this->data['Actions']['SecurityAccess'];
        
        $inflect = new Inflector();
            
        foreach ( $securityAccess as $name_pair_key => $access_selection ) {
            
            $name_pair = explode( "__", $name_pair_key );
            
            $controller = $inflect->singularize( $name_pair[0] );
            $action = $name_pair[1]; 
                       
            if ( $access_selection == 'delete' ) {
            
                $aco = new Aco();                        
                
                $aco_record = $aco->find( array(
                                    "Aco.model" => $controller,
                                    "Aco.alias" => $action ) );
                                  
                if ( !empty( $aco_record ) ) {
                
                    $delete_id = $aco_record['Aco']['id'];                         
                    $aco->delete( $delete_id );
                }  
            }
            elseif ( $access_selection == 'include' ) {
            
                $parent_id = '0';
            
                // Find the parent, if no parent, we create one
                $aco_parent = new Aco();
                $aco_parent_record = $aco_parent->find(
                                    array(  "Aco.model" => $controller,
                                            "Aco.alias" => $name_pair[0] ) );
            
                if ( empty( $aco_parent_record ) ) {
                    
                    $aco_parent = new Aco();
                    
                    $aco_parent->create();
                    $aco_parent->save( array(   'model' => $controller,
                                                'foreign_key' => '',
                                                'alias' => $name_pair[0],
                                			    'parent_id'		=> ''                            			    
                                                ) );  
                                    
                    $parent_id = $aco_parent->id;                                                                   
                }     
                else {
                
                    $parent_id =  $aco_parent_record['Aco']['id'];  
                }                                 
            
                // now lets create the aco record itself
                $aco = new Aco();
                
                $aco->create();                        
                $aco->save( array(  'model' => $controller,
                                    'foreign_key' => '',
                                    'alias' => $action,
                    			    'parent_id'		=> $parent_id                            			    
                                    ) );                                        
            }
        }
	}
	
	function __getActions(){
		$controllerClasses = App::objects('controller');
        foreach($controllerClasses as $k => $controller) { 
            if ($controller != 'App') { 
                App::import('Controller', $controller);
                $className = $controller . 'Controller';
                $actions = get_class_methods($className);
                foreach($actions as $k => $v) {
                    if ($v{0} == '_') {
                        unset($actions[$k]);
                    }
                }
                $parentActions = get_class_methods('AppController');   
                $controllers[][$controller] = array_diff($actions, $parentActions);              
        	}
        }
		#debug($controllers);
	    foreach($controllers as $k => $v){
			foreach($v as $controller => $actions){
				#debug($actions);
				$action_group[ 'name' ] = $controller;
				$action_group[ 'name_singular' ] = Inflector::singularize($controller);
				$action_group[ 'actions' ] = $actions;
				$_actions[] = $action_group;					
			}
		}
		$this->set( 'actions', $_actions );
        // Get the full list of Aco records
        $aco = new Aco();
        $aco_list = $aco->find('all');
        #debug($aco_list);
		$result = array();
        
        foreach ( $aco_list as $current_aco ) {
            $key_0 = $current_aco['Aco']['model'];
            $key_1 = $current_aco['Aco']['alias'];
        
            $result[ $key_0.'__'.$key_1 ] = $current_aco;
        }
        $this->set( 'aco_list', $result );		
	}
	
	
}
?>
