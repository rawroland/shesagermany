<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Class AddressesTable.
 */
class AddressesTable extends Table
{
    /**
     * @param array $config
     */
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('addresses');
        $this->displayField('street');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasOne('Activities', []);
    }

    public function validationDefault(Validator $validator)
    {
        $validator->add('id', 'isNumeric', ['rule' => 'numeric', 'message' => 'Please provide an id for the entry'])
            ->allowEmpty('id', 'created')
            ->notEmpty('street', 'Please provide the street name.')->requirePresence('street')
            ->notEmpty('postal_code', 'Please provide a postal code.')->requirePresence('postal_code')
            ->notEmpty('town', 'Please provide the town name.')->requirePresence('town')
            ->notEmpty('state', 'Please provide the state name.')->requirePresence('state')
            ->notEmpty('country', 'Please provide the country name.')->requirePresence('country');

        return $validator;
    }
}
