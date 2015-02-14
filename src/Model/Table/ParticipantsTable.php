<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Class ParticipantsTable
 * @package App\Model\Table
 */
class ParticipantsTable extends Table
{

    /**
     * @param array $config
     */
    public function initialize(array $config) {
        parent::initialize($config);
        $this->table('participants');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('Activities', []);
    }

    public function validationDefault(Validator $validator) {
        $validator->add('id', 'isNumeric', ['rule' => 'numeric', 'message' => 'Please provide an id for the entry'])
          ->allowEmpty('id', 'created')
          ->add('type', 'validType', [
            'rule' => ['inList', ['person', 'organization']]
          ])
          ->notEmpty('type', __('Please provide a type for the participant!'))
          ->requirePresence('type');
        return $validator;
    }
} 