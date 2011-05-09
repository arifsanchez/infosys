<?php
/* UserContacts Test cases generated on: 2011-05-10 00:11:07 : 1304957467*/
App::import('Controller', 'UserContacts');

class TestUserContactsController extends UserContactsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UserContactsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.user_contact', 'app.user', 'app.group', 'app.announcement', 'app.user_friendship', 'app.user_life', 'app.user_profile', 'app.user_shout_reply', 'app.user_shout', 'app.user_voip');

	function startTest() {
		$this->UserContacts =& new TestUserContactsController();
		$this->UserContacts->constructClasses();
	}

	function endTest() {
		unset($this->UserContacts);
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