<?php
/* UserLives Test cases generated on: 2011-05-10 00:11:18 : 1304957478*/
App::import('Controller', 'UserLives');

class TestUserLivesController extends UserLivesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UserLivesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user_life', 'app.user', 'app.group', 'app.announcement', 'app.user_contact', 'app.user_voip', 'app.user_friendship', 'app.user_profile', 'app.user_shout_reply', 'app.user_shout');

	function startTest() {
		$this->UserLives =& new TestUserLivesController();
		$this->UserLives->constructClasses();
	}

	function endTest() {
		unset($this->UserLives);
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