<?php
/* UserShouts Test cases generated on: 2011-05-10 00:11:40 : 1304957500*/
App::import('Controller', 'UserShouts');

class TestUserShoutsController extends UserShoutsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UserShoutsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user_shout', 'app.user', 'app.group', 'app.announcement', 'app.user_contact', 'app.user_voip', 'app.user_friendship', 'app.user_life', 'app.user_profile', 'app.user_shout_reply');

	function startTest() {
		$this->UserShouts =& new TestUserShoutsController();
		$this->UserShouts->constructClasses();
	}

	function endTest() {
		unset($this->UserShouts);
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