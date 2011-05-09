<?php
/* UserShoutReplies Test cases generated on: 2011-05-10 00:11:32 : 1304957492*/
App::import('Controller', 'UserShoutReplies');

class TestUserShoutRepliesController extends UserShoutRepliesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UserShoutRepliesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user_shout_reply', 'app.user', 'app.group', 'app.announcement', 'app.user_contact', 'app.user_voip', 'app.user_friendship', 'app.user_life', 'app.user_profile', 'app.user_shout');

	function startTest() {
		$this->UserShoutReplies =& new TestUserShoutRepliesController();
		$this->UserShoutReplies->constructClasses();
	}

	function endTest() {
		unset($this->UserShoutReplies);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>