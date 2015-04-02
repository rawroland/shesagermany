<?php

namespace App\Controller;

use Cake\Datasource\Exception\RecordNotFoundException;

/**
 * Class EventsController.
 *
 * @property \App\Model\Table\EventsTable $Events
 * @property \Cake\Controller\Component\FlashComponent $Flash
 */
class EventsController extends AppController
{
    public $paginate = [];

    public function initialize()
    {
        $this->paginate = [
            'contain' => $this->Events->defaultContain, 'limit' => $this->Events->defaultLimit,
            'order' => $this->Events->defaultSort,
        ];
        parent::initialize();
    }

    /**
     * Add or edit an event depending on the presence of an id.
     *
     * @param int $eventId Event id to be edited
     */
    public function edit($eventId = null)
    {
        $options = [
            'associated' => ['Activities' => ['associated' => ['Participants' => ['associated' => ['People']]]]],
        ];
        $event = $this->Events->newEntity();
        if (!empty($eventId)) {
            $event = $this->Events->getSingle($eventId);
        }
        if ($this->request->is(['post', 'put', 'patch'])) {
            $event = $this->Events->patchEntity($event, $this->request->data(), $options);
            if ($this->Events->save($event)) {
                $this->Flash->success('The Event was successfully saved.');

                return $this->redirect(['action' => 'index_admin']);
            }
            $this->Flash->error('The Event could not be saved. Please check the submitted data and try again.');
        }
        $this->set(compact('event'));
    }

    public function indexAdmin()
    {
        $this->set('events', $this->paginate($this->Events));
    }

    public function index()
    {
        $events = $this->paginate($this->Events);
        $this->pageTitle = __('Events');
        $this->set(compact('events'));
    }

    /**
     * @param $eventId
     *
     * @return \Cake\Network\Response|void
     *
     * @todo What could go wrong so that saving fails
     */
    public function delete($eventId)
    {
        $this->autoRender = false;
        $this->request->allowMethod(['post', 'delete']);
        if (!$this->Events->exists([$this->Events->alias().'.'.$this->Events->primaryKey() => $eventId])) {
            $this->Flash->error("The event with id $eventId was not found!");

            return $this->redirect($this->referer());
        }
        if ($this->Events->customDelete($eventId)) {
            $this->Flash->success("The event with id $eventId was successfully deleted!");
        }

        return $this->redirect($this->referer());
    }

    public function view($eventId)
    {
        try {
            $event = $this->Events->getSingle($eventId);
        } catch (RecordNotFoundException $exception) {
            $this->log("Tried to access nonexistent Event with id [{$eventId}]");
            $this->log($exception->getTraceAsString());
            $this->Flash->error('The resource you are looking for could not be found. Please try again later.');

            return $this->redirect($this->referer());
        }
        $this->pageTitle = $event->get('title');
        $this->set(compact('event'));
    }
}
