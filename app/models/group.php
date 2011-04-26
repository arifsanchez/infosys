<?php
class Group extends AppModel {
	var $name = 'Group';
	
	// Acl, jadikan Group as ARO	
    var $actsAs = array('Acl'=>'requester');

  	function afterSave($created) {
  		if($created) {
  		
			$aro = new Aro();
			$aro->updateAll( array( 'alias'=>  '"Group:'.$this->id  .'"'), // the field
                             array( 
									'Aro.model'=>'Group', // condition 1
                                    'Aro.foreign_key'=> $this->id // condition 2 
									)
			                     );
		}
		else {		
            // its an edit, we have to update the tree
            $data = $this->read();
            $parent_id = $data['User']['group_id'];

            $aro = new Aro();     
            $aro_record = $aro->findByForeignKey( $this->id );
            $parent_record = $aro->findByForeignKey( $parent_id );
            if ( !empty( $aro_record ) ) {          
                // orphaned child
                $this->Aro->save( array(
                    'model' => 'Group', 
                    'foreign_key' => $this->id,
                    'alias' => 'Group:'.$this->id,
    			    'parent_id'		=> $parent_record['Aro']['id']
                ) );
            
                // just changing parents
                // just moving nodes
                $this->Aro->save( array(
                    'model' => 'Group',
                    'foreign_key' => $this->id,
                    'alias' => 'Group:'.$this->id,
    			    'parent_id'		=> $parent_record['Aro']['id'],
    				'id'			=> $aro_record['Aro']['id']
    			) );
            }    			
        }
		return true;
	}
	
	// Acl memerlukan function parentNode
	function parentNode(){
    
        // This should be the alias of the parent $model::$id
        $data = $this->read();
    
        // This needs to be unique    
        return 'Group:'.$data['Group']['parent_id'];
    }

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'ParentGroup' => array(
			'className' => 'Group',
			'foreignKey' => 'parent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'ChildGroup' => array(
			'className' => 'Group',
			'foreignKey' => 'parent_id',
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
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'group_id',
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
