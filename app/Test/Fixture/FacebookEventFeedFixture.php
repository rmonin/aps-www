<?php
/**
 * FacebookEventFeedFixture
 *
 */
class FacebookEventFeedFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 11, 'key' => 'primary'),
		'event_id' => array('type' => 'string', 'null' => true, 'default' => null),
		'link_id' => array('type' => 'string', 'null' => true, 'default' => null),
		'post_id' => array('type' => 'string', 'null' => true, 'default' => null),
		'status_id' => array('type' => 'string', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('unique' => true, 'column' => 'id'),
			'facebook_event_feeds_idx' => array('unique' => true, 'column' => 'id')
		),
		'tableParameters' => array()
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'event_id' => 'Lorem ipsum dolor sit amet',
			'link_id' => 'Lorem ipsum dolor sit amet',
			'post_id' => 'Lorem ipsum dolor sit amet',
			'status_id' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-02-23 15:56:59',
			'modified' => '2015-02-23 15:56:59'
		),
	);

}
