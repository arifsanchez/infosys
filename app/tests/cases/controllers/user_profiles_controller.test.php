<?php
/* UserProfiles Test cases generated on: 2011-05-10 00:11:23 : 1304957483*/
App::import('Controller', 'UserProfiles');

class TestUserProfilesController extends UserProfilesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UserProfilesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user_profile', 'app.user', 'app.group', 'app.announcement', 'app.user_contact', 'app.user_voip', 'app.user_friendship', 'app.user_life', 'app.user_shout_reply', 'app.user_shout');

	function startTest() {
		$this->UserProfiles =& new TestUserProfilesController();
		$this->UserProfiles->constructClasses();
	}

	function endTest() {
		unset($this->UserProfiles);
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