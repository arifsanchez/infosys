<?php
/* UserProfile Fixture generated on: 2011-05-10 00:11:23 : 1304957483 */
class UserProfileFixture extends CakeTestFixture {
	var $name = 'UserProfile';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'about_me' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'gender' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 2),
		'birthday' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'sex_interest' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 2),
		'relation_stat' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 2),
		'origin' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 35, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'last_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 35, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'first_name' => array('column' => array('first_name', 'last_name'), 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'about_me' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'gender' => 1,
			'birthday' => '2011-05-10',
			'sex_interest' => 1,
			'relation_stat' => 1,
			'origin' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-05-10 00:11:23',
			'modified' => '2011-05-10 00:11:23'
		),
	);
}
?>