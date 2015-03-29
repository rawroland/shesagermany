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
    public $defaultLimit = 5;
    public $defaultSort = ['Events.start' => 'desc'];
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
            ->notEmpty('location', 'Please provide a location for the event.')
            ->requirePresence('location')
            ->notEmpty('start', 'Please provide a start date for the event.')
            ->add('start', 'validStartDate', [
                'rule' => ['date', ['dmy', 'ymd']],
                'message' => 'Please provide a valid start date. Allowed format is DD-MM-YYYY.',
            ])->requirePresence('start')
            ->notEmpty('end', 'Please provide an end date for the event.')
            ->add('end', 'validEndDate', [
                'rule' => ['date', ['dmy', 'ymd']],
                'message' => 'Please provide a valid end date. Allowed format is DD-MM-YYYY.',
            ])->requirePresence('end');

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

    /**
     * Sets the deleted flag of events and its activities to true to simulate deleting.
     * Such events will not be displayed anymore.
     *
     * @param $eventId Event to be deleted
     * @return bool|\Cake\Datasource\EntityInterface|mixed
     */
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

    public function  getPromoted()
    {
        $promoted = $this->find('all')
            ->where(["{$this->alias()}.promoted" => 1])
            ->contain(['Activities'])
            ->first();
        return $promoted;
    }
}
