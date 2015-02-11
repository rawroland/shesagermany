<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) {
        $this->table('users');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator instance
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator) {
        $validator
          ->add('id', 'valid', ['rule' => 'numeric'])
          ->allowEmpty('id', 'create')
          ->add('email', 'valid', ['rule' => 'email'])
          ->requirePresence('email', 'create')
          ->notEmpty('email')
          ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table'])
          ->requirePresence('password', 'create')
          ->notEmpty('password')
          ->allowEmpty('title')
          ->requirePresence('name', 'create')
          ->notEmpty('name')
          ->requirePresence('surname', 'create')
          ->notEmpty('surname');

        return $validator;
    }

}
