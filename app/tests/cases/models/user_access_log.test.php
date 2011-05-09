<?php
/* UserAccessLog Test cases generated on: 2011-05-10 06:33:58 : 1304980438*/
App::import('Model', 'UserAccessLog');

class UserAccessLogTestCase extends CakeTestCase {
	var $fixtures = array('app.user_access_log', 'app.user', 'app.group', 'app.announcement', 'app.user_contact', 'app.user_voip', 'app.user_friendship', 'app.user_life', 'app.user_profile', 'app.user_shout_reply', 'app.user_shout');

	function startTest() {
		$this->UserAccessLog =& ClassRegistry::init('UserAccessLog');
	}

	function endTest() {
		unset($this->UserAccessLog);
		ClassRegistry::flush();
	}

}
?>