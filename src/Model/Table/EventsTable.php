<?php

namespace App\Model\Table;

use App\Model\Entity\Event;
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
     * @param int   $eventId
     * @param array $parameters Additional parameters for searching.
     *
     * @return \Cake\Datasource\EntityInterface|mixed
     */
    public function getSingle($eventId, $parameters = [])
    {
        $defaultOptions = ['contain' => $this->defaultContain];
        $options = array_merge($defaultOptions, $parameters);

        return $this->get($eventId, $options);
    }

    public function customDelete($eventId)
    {
        $event = $this->getSingle($eventId, ['contain' => ['Activities']]);
        $event->set('deleted', 1);
        foreach ($event->activities as $index => $activity) {
            $activity->set('deleted', 1);
        }
        $event->dirty('activities', true);

        return $this->save($event);
    }
}
