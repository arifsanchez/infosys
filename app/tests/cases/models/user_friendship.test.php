<?php
/* UserFriendship Test cases generated on: 2011-05-10 00:11:11 : 1304957471*/
App::import('Model', 'UserFriendship');

class UserFriendshipTestCase extends CakeTestCase {
	var $fixtures = array('app.user_friendship', 'app.user', 'app.group', 'app.announcement', 'app.user_contact', 'app.user_voip', 'app.user_life', 'app.user_profile', 'app.user_shout_reply', 'app.user_shout');

	function startTest() {
		$this->UserFriendship =& ClassRegistry::init('UserFriendship');
	}

	function endTest() {
		unset($this->UserFriendship);
		ClassRegistry::flush();
	}

}
?>