<?php
namespace App\Controller;

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
        $this->paginate = ['contain', $this->Events->defaultContain];
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

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('The Event could not be saved. Please check the submitted data and try again.');
        }
        $this->set(compact('event'));
    }

    public function index()
    {
        $this->set('events', $this->paginate($this->Events));
    }
}
