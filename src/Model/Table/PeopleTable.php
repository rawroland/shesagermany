<?php

namespace App\Model\Table;

use App\Model\Entity\Person;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Class PeopleTable.
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
        $this->hasMany('Participants', []);
    }

    public function validationDefault(Validator $validator)
    {
        $validator->add('id', 'isNumeric', ['rule' => 'numeric', 'message' => 'Please provide an id for the entry'])
            ->allowEmpty('id', 'created')
            ->requirePresence('surname')
            ->notEmpty('surname', 'Please provide a surname!')
            ->add('surname', 'validLength', [
                'rule' => ['lengthBetween', 2, 128],
                'message' => 'The surname must be at least 2 characters and at most 128 characters long!',
            ])->requirePresence('name')
            ->notEmpty('name', 'Please provide a name!')
            ->add('name', 'validLength', [
                'rule' => ['lengthBetween', 2, 128],
                'message' => 'The name must be at least 2 characters and at most 128 characters long!',
            ])
            ->add('title', 'validTitle', [
                'rule' => ['inList', [
                    Person::TITLE_DR, Person::TITLE_DR_ING, Person::TITLE_DR_MED,
                    Person::TITLE_MR, Person::TITLE_MRS, Person::TITLE_MS, Person::TITLE_MS,
                ]],
                'message' => 'Valid values for the title are Dr., Mr and Mrs!',
            ])->allowEmpty('title');

        return $validator;
    }
}
