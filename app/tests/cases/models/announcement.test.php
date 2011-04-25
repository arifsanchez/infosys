<?php
/* Announcement Test cases generated on: 2011-04-25 16:31:28 : 1303720288*/
App::import('Model', 'Announcement');

class AnnouncementTestCase extends CakeTestCase {
	var $fixtures = array('app.announcement', 'app.user', 'app.group');

	function startTest() {
		$this->Announcement =& ClassRegistry::init('Announcement');
	}

	function endTest() {
		unset($this->Announcement);
		ClassRegistry::flush();
	}

}
?>