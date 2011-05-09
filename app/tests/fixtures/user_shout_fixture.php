<?php
/* UserShout Fixture generated on: 2011-05-10 00:11:40 : 1304957500 */
class UserShoutFixture extends CakeTestFixture {
	var $name = 'UserShout';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'text' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'status' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 2),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'text' => 'Lorem ipsum dolor sit amet',
			'status' => 1,
			'created' => '2011-05-10 00:11:40',
			'modified' => '2011-05-10 00:11:40'
		),
	);
}
?>