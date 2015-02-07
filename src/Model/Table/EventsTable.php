<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Class EventsTable
 * @package App\Model\Table
 */
class EventsTable extends Table {

  /**
   * @param array $config
   */
  public function initialize(array $config) {
    parent::initialize($config);
    $this->table('events');
    $this->displayField('title');
    $this->primaryKey('id');
    $this->addBehavior('Timestamp');
    $this->hasMany('Activities', []);
  }

  public function validationDefault(Validator $validator) {
    $validator->add('id', 'isNumeric', ['rule' => 'numeric', 'message' => 'Please provide an id for the entry'])
      ->allowEmpty('id', 'created')
      ->notEmpty('title', 'Please provide a title for the event.')
      ->add('title', 'validLength', [
        'rule' => ['lengthBetween', 10, 128],
        'message' => 'The length of the event title must be between 10 and 128.'
      ])->requirePresence('title');
    return $validator;
  }
} 