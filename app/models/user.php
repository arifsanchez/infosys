<?php
class User extends AppModel {
	var $name = 'User';
	
	// Acl, jadikan Group as ARO	
    var $actsAs = array('Acl'=>'requester');

	// Acl memerlukan function parentNode
	function parentNodex(){
		// used while registration
		if (!$this->id && empty($this->data)) {
			return null;
		}
		if (isset($this->data['User']['group_id'])) {
			$groupId = $this->data['User']['group_id'];
		} else {
			$groupId = $this->field('group_id');
		}
		if (!$groupId) {
			return null;
			} else {
			return array('Group' => array('id' => $groupId));
		}   
		
    }
	
	function parentNode(){
		$data = $this->read();
		return 'Group:' . $data['User']['group_id'];
	}
	
  	function afterSave($created) {

  		if($created) {
  		
  		    // its a creation
			$aro = new Aro();
			$aro->updateAll( array( 'alias'=>  '"User:'.$this->id  .'"'), // the field
                             array( 
									'Aro.model'=>'User', // condition 1
                                    'Aro.foreign_key'=> $this->id // condition 2 
									)
			                     );
		}
		else {
		
            // its an edit, we have to update the tree
            $data = $this->read();
            $parent_id = $data['User']['group_id'];

            $aro = new Aro();
            
            $aro_record = $aro->findByAlias( 'User:'.$this->id );
			$parent_record = $aro->findByAlias( 'Group:'.$parent_id );
                          
            if ( !empty( $aro_record ) ) {          
                $parent_id = '0';
                if ( !empty( $parent_record ) ) {
                    $parent_id = $parent_record['Aro']['id']; // group_id
                }
                
                // just changing parents
                $this->Aro->save( array(
                    'parent_id'		=> $parent_id, 
    				'id'			=> $aro_record['Aro']['id'] 
    			) );
            }    			
        }
		return true;
	}
	
	var $validate = array(
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Announcement' => array(
			'className' => 'Announcement',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>
