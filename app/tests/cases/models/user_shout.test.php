<?php
/* UserShout Test cases generated on: 2011-05-10 00:11:40 : 1304957500*/
App::import('Model', 'UserShout');

class UserShoutTestCase extends CakeTestCase {
	var $fixtures = array('app.user_shout', 'app.user', 'app.group', 'app.announcement', 'app.user_contact', 'app.user_voip', 'app.user_friendship', 'app.user_life', 'app.user_profile', 'app.user_shout_reply');

	function startTest() {
		$this->UserShout =& ClassRegistry::init('UserShout');
	}

	function endTest() {
		unset($this->UserShout);
		ClassRegistry::flush();
	}

}
?>