<?php

namespace App\Model\Table;

use App\Model\Entity\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Class EventsTable.
 */
class EventsTable extends Table
{
    public $defaultContain = ['Activities' => ['Participants' => ['People', 'Organizations']]];
    /**
     * @param array $config
     */
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('events');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('Activities', []);
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
            ->notEmpty('date', 'Please provide a date for the event.')
            ->add('date', 'validDate', [
                'rule' => ['date', ['dmy', 'ymd']],
                'message' => 'Please provide a valid date. Allowed format is DD-MM-YYYY.',
            ])->requirePresence('date');

        return $validator;
    }

    /**
     * Retrieve a single event record.
     *
     * @param int $eventId
     *
     * @return Event Retrieved event.
     *
     * @throws NotFoundException When the record is not found.
     */
    public function getSingle($eventId = null)
    {
        $options = ['contain' => $this->defaultContain];

        return $this->get($eventId, $options);
    }

    public function customDelete($eventId)
    {
    }
}
