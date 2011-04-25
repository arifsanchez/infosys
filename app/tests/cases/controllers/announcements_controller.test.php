<?php
/* Announcements Test cases generated on: 2011-04-25 16:31:28 : 1303720288*/
App::import('Controller', 'Announcements');

class TestAnnouncementsController extends AnnouncementsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AnnouncementsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.announcement', 'app.user', 'app.group');

	function startTest() {
		$this->Announcements =& new TestAnnouncementsController();
		$this->Announcements->constructClasses();
	}

	function endTest() {
		unset($this->Announcements);
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