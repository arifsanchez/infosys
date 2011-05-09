<?php
/* UserFriendships Test cases generated on: 2011-05-10 00:11:11 : 1304957471*/
App::import('Controller', 'UserFriendships');

class TestUserFriendshipsController extends UserFriendshipsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UserFriendshipsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user_friendship', 'app.user', 'app.group', 'app.announcement', 'app.user_contact', 'app.user_voip', 'app.user_life', 'app.user_profile', 'app.user_shout_reply', 'app.user_shout');

	function startTest() {
		$this->UserFriendships =& new TestUserFriendshipsController();
		$this->UserFriendships->constructClasses();
	}

	function endTest() {
		unset($this->UserFriendships);
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