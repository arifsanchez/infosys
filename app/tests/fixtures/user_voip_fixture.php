<?php
/* UserVoip Fixture generated on: 2011-05-10 00:11:44 : 1304957504 */
class UserVoipFixture extends CakeTestFixture {
	var $name = 'UserVoip';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'friend_user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'status' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'friend_user_id' => 1,
			'status' => 1,
			'created' => '2011-05-10 00:11:44',
			'modified' => '2011-05-10 00:11:44'
		),
	);
}
?>