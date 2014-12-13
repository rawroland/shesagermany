<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity.
 */
class User extends Entity {

/**
 * Fields that can be mass assigned using newEntity() or patchEntity().
 *
 * @var array
 */
	protected $_accessible = [
		'email' => true,
		'password' => true,
		'title' => true,
		'name' => true,
		'surname' => true,
	];

    protected function _setPassword($password) {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }

    /**
     * Save a new user.
     * @param array $data
     */
    public function saveNew($data = array()) {
        if(empty($data)) {
            throw new \InvalidArgumentException("Please provide the user data");
        }
    }
}
