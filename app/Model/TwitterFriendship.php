<?php
App::uses('AppModel', 'Model');
/**
 * TwitterFriendship Model
 *
 * @property User $User
 */
class TwitterFriendship extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'modified';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
