<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Class OrganizationsTable.
 */
class OrganizationsTable extends Table
{
    /**
     * @param array $config
     */
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('organizations');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('Participants', []);
    }

    public function validationDefault(Validator $validator)
    {
        $validator->add('id', 'isNumeric', ['rule' => 'numeric', 'message' => 'Please provide an id for the entry'])
            ->allowEmpty('id', 'created')
            ->requirePresence('name')
            ->notEmpty('name', 'Please provide a name!')
            ->add('name', 'validLength', [
                'rule' => ['lengthBetween', 2, 128],
                'message' => 'The name must be at least 2 characters and at most 128 characters long!',
            ]);

        return $validator;
    }
}
