<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Class ActivitiesTable
 * @package App\Model\Table
 */
class ActivitiesTable extends Table
{

    /**
     * @param array $config
     */
    public function initialize(array $config) {
        parent::initialize($config);
        $this->table('activities');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('Participants', []);
    }

    public function validationDefault(Validator $validator) {
        $validator->add('id', 'isNumeric', ['rule' => 'numeric', 'message' => 'Please provide an id for the entry'])
          ->allowEmpty('id', 'created')
          ->notEmpty('title', 'Please provide a title for the event.')
          ->add('title', 'validLength', [
            'rule' => ['lengthBetween', 10, 128],
            'message' => 'The length of the event title must be between 10 and 128.'
          ])->requirePresence('title')
          ->notEmpty('description', 'Please provide a description for the event.')
          ->add('description', 'minLength', [
            'rule' => ['minLength', 50],
            'message' => 'The length of the event description must be greater than 50.'
          ])->requirePresence('description')
          ->notEmpty('date_time', 'Please provide a date for the event.')
          ->add('date_time', 'validDateTime', [
            'rule' => ['datetime', ['dmy', 'ymd']],
            'message' => 'Please provide a valid date. Allowed format is DD-MM-YYYY.'
          ])->requirePresence('date_time');
        return $validator;
    }
} 