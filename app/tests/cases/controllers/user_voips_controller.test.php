<?php
/* UserVoips Test cases generated on: 2011-05-10 00:14:25 : 1304957665*/
App::import('Controller', 'UserVoips');

class TestUserVoipsController extends UserVoipsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UserVoipsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user_voip', 'app.user', 'app.group', 'app.announcement', 'app.user_contact', 'app.user_friendship', 'app.user_life', 'app.user_profile', 'app.user_shout_reply', 'app.user_shout');

	function startTest() {
		$this->UserVoips =& new TestUserVoipsController();
		$this->UserVoips->constructClasses();
	}

	function endTest() {
		unset($this->UserVoips);
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