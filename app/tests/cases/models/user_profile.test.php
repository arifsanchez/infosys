<?php
/* UserProfile Test cases generated on: 2011-05-10 00:11:23 : 1304957483*/
App::import('Model', 'UserProfile');

class UserProfileTestCase extends CakeTestCase {
	var $fixtures = array('app.user_profile', 'app.user', 'app.group', 'app.announcement', 'app.user_contact', 'app.user_voip', 'app.user_friendship', 'app.user_life', 'app.user_shout_reply', 'app.user_shout');

	function startTest() {
		$this->UserProfile =& ClassRegistry::init('UserProfile');
	}

	function endTest() {
		unset($this->UserProfile);
		ClassRegistry::flush();
	}

}
?>