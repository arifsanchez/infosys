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
		'username' => array(
			'alphaNumeric' => array(
				'rule'		=> 'alphaNumeric',
				'required'	=> true,
				'on'		=> 'create',
				'message'	=> 'Username must be only letters and numbers, no special characters'
			),
			'between' => array(
				'rule' 		=> array('between', 5, 20),
				'on'		=> 'create',
				'message'	=> 'Username must be between 5 and 20 characters',
			),
			'isUnique' => array(
				'rule'		=> 'isUnique',
				'on'		=> 'create',
				'message'	=> 'This username is already taken. Please choose a different one.'
			)
		),
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
			),
		),
	);
	
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
		),
		'UserAccessLog' => array(
			'className' => 'UserAccessLog',
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
		),
		'UserContact' => array(
			'className' => 'UserContact',
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
		),
		'UserFriendship' => array(
			'className' => 'UserFriendship',
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
		),
		'UserLife' => array(
			'className' => 'UserLife',
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
		),
		'UserProfile' => array(
			'className' => 'UserProfile',
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
		),
		'UserShoutReply' => array(
			'className' => 'UserShoutReply',
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
		),
		'UserShout' => array(
			'className' => 'UserShout',
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
		),
		'UserVoip' => array(
			'className' => 'UserVoip',
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
