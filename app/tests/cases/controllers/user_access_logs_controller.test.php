<?php
/* UserAccessLogs Test cases generated on: 2011-05-10 06:33:59 : 1304980439*/
App::import('Controller', 'UserAccessLogs');

class TestUserAccessLogsController extends UserAccessLogsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UserAccessLogsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user_access_log', 'app.user', 'app.group', 'app.announcement', 'app.user_contact', 'app.user_voip', 'app.user_friendship', 'app.user_life', 'app.user_profile', 'app.user_shout_reply', 'app.user_shout');

	function startTest() {
		$this->UserAccessLogs =& new TestUserAccessLogsController();
		$this->UserAccessLogs->constructClasses();
	}

	function endTest() {
		unset($this->UserAccessLogs);
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