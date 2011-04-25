<?php 
class CreateAroShell extends Shell {

	 function main() {
	 
		// load Acl component
		App::import('Component','Acl');	
        $this->Acl = new AclComponent(null); 
      
		// output to screen
        $this->out('Creating Group');
        $this->hr();
		
		// this will create Aro::Root
		$this->Acl->Aro->create();
		$this->Acl->Aro->save(array(
			'model' => 'Group',
			'foreign_key' => 1, // get id for group 'User'
			'parent_id' => null,
			'alias' => 'Group:1',
		));
 		
		// this will create Aro::Parent
		$this->out('Creating User');
        $this->hr(); 		
		$this->Acl->Aro->create();
		$parent_id = $this->Acl->Aro->getLastInsertId();
		$this->Acl->Aro->save(array(
			'model' => 'User',
			'foreign_key' => 2, // get id for current user,
			'parent_id' => $parent_id,
			'alias' => 'User:2 ',
		)); 
		$this->out('Done');
	}	
}
