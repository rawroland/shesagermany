<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Class PeopleTable
 * @package App\Model\Table
 */
class PeopleTable extends Table
{

    /**
     * @param array $config
     */
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('people');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasOne('People', []);
        $this->hasOne('Organizations', []);
    }

    public function validationDefault(Validator $validator)
    {
        $validator->add('id', 'isNumeric', ['rule' => 'numeric', 'message' => 'Please provide an id for the entry'])
            ->allowEmpty('id', 'created')->requirePresence('surname')->notEmpty('surname', 'Please provide a surname!')
            ->add('surname', 'validLength', [
                'rule' => ['lengthBetween', 2, 128],
                'message' => 'The surname must be at least 2 characters and at most 128 characters long!',
            ]);

        return $validator;
    }
}
