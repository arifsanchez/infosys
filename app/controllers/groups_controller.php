<?php
class GroupsController extends AppController {

	var $name = 'Groups';
	
	function security($id = null){
		if (!$id) {
			$this->Session->setFlash(__('Invalid group', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {

            // lets get the Aro i.e. the group
            $aro_foreign_key = $this->data['Group']['id'];
            
            $aro = new Aro();
            $aro_record = $aro->findByAlias( 'Group:'.$aro_foreign_key );
            
            $aro_alias = $aro_record['Aro']['alias'];
            $aco_of_aro = $aro_record['Aco'];
            
            // lets run through the security selection
            $sec_access = $this->data['Group']['SecurityAccess'];
            
            $aco = new Aco();
            
            foreach ( $sec_access as $aco_id => $access_type ) {
                
                $aco_record = $aco->findById( $aco_id );
          
				if(!empty($aco_record)){ 
					$model_plural = Inflector::pluralize( $aco_record['Aco']['model'] );
				       	
					if ( $access_type == 'allow' ) {
						$this->Acl->allow(  $aro_alias,
											$model_plural.'/'.$aco_record[ 'Aco' ][ 'alias' ], '*');
					}
					elseif ( $access_type == 'deny' ) {
						$this->Acl->deny(   $aro_alias,
											$model_plural.'/'.$aco_record[ 'Aco' ][ 'alias' ], '*');
					}
				}	
            }
			$this->Session->setFlash('Security Access updated');
			#$this->redirect('index');
        }
	
		$aco = new Aco();
        $aco_records = $aco->find('all',(array('conditions' => array('parent_id' => null))));
		#debug($aco_records);
		foreach($aco_records as $k => $v ){
			$options = array('conditions' => array('parent_id' => $v['Aco']['id']));
			$aco_records[$k]['Aco']['actions'] = $this->Acl->Aco->find('all',$options);
			
		}
	 		 
		$this->set( compact( 'aco_records' ) );
        
        $this->set( 'current_alias', 'Group:'.$this->Group->id );
        
		$data = $this->Group->read(null, $id);
		$this->set('name', $data['Group']['name']);
		
        if (empty($this->data)) {
			$this->data = $data;
		}
	}
	
	
	/** baked actions **/
	function index() {
		$this->Group->recursive = 0;
		$this->set('groups', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid group', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('group', $this->Group->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Group->create();
			if ($this->Group->save($this->data)) {
				$this->Session->setFlash(__('The group has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group could not be saved. Please, try again.', true));
			}
		}
		$parentGroups = $this->Group->ParentGroup->find('list');
		$this->set(compact('parentGroups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid group', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Group->save($this->data)) {
				$this->Session->setFlash(__('The group has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The group could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Group->read(null, $id);
		}
		$parentGroups = $this->Group->ParentGroup->find('list');
		$this->set(compact('parentGroups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for group', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Group->delete($id)) {
			$this->Session->setFlash(__('Group deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Group was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
