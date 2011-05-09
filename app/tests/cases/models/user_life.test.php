<?php
/* UserLife Test cases generated on: 2011-05-10 00:11:18 : 1304957478*/
App::import('Model', 'UserLife');

class UserLifeTestCase extends CakeTestCase {
	var $fixtures = array('app.user_life', 'app.user', 'app.group', 'app.announcement', 'app.user_contact', 'app.user_voip', 'app.user_friendship', 'app.user_profile', 'app.user_shout_reply', 'app.user_shout');

	function startTest() {
		$this->UserLife =& ClassRegistry::init('UserLife');
	}

	function endTest() {
		unset($this->UserLife);
		ClassRegistry::flush();
	}

}
?>