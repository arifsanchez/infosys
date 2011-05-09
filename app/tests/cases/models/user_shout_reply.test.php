<?php
/* UserShoutReply Test cases generated on: 2011-05-10 00:11:32 : 1304957492*/
App::import('Model', 'UserShoutReply');

class UserShoutReplyTestCase extends CakeTestCase {
	var $fixtures = array('app.user_shout_reply', 'app.user', 'app.group', 'app.announcement', 'app.user_contact', 'app.user_voip', 'app.user_friendship', 'app.user_life', 'app.user_profile', 'app.user_shout');

	function startTest() {
		$this->UserShoutReply =& ClassRegistry::init('UserShoutReply');
	}

	function endTest() {
		unset($this->UserShoutReply);
		ClassRegistry::flush();
	}

}
?>