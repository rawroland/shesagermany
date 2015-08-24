<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Class ActivitiesTable.
 */
class ActivitiesTable extends Table
{
    /**
     * @param array $config
     */
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('activities');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsToMany('Participants', ['through' => 'ActivitiesParticipants']);
        $this->belongsTo('Addresses', []);
    }

    public function validationDefault(Validator $validator)
    {
        $validator->add('id', 'isNumeric', ['rule' => 'numeric', 'message' => 'Please provide an id for the entry'])
            ->allowEmpty('id', 'created')
            ->notEmpty('title', 'Please provide a title for the event.')
            ->add('title', 'validLength', [
                'rule' => ['lengthBetween', 10, 128],
                'message' => 'The length of the event title must be between 10 and 128.',
            ])->requirePresence('title')
            ->notEmpty('description', 'Please provide a description for the event.')
            ->add('description', 'minLength', [
                'rule' => ['minLength', 50],
                'message' => 'The length of the event description must be greater than 50.',
            ])->requirePresence('description')
            ->notEmpty('start_time', 'Please provide a start date and time for the activity.')
            ->add('start_time', 'validStartDateTime', [
                'rule' => ['datetime', ['dmy', 'ymd']],
                'message' => 'Please provide a valid start date and time for the activity.',
            ])->requirePresence('start_time')
            ->notEmpty('end_time', 'Please provide a end date and time for the activity.')
            ->add('end_time', 'validEndDateTime', [
                'rule' => ['datetime', ['dmy', 'ymd']],
                'message' => 'Please provide a valid end date and time for the activity.',
            ])->requirePresence('end_time');

        return $validator;
    }
}
