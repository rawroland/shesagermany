<?php
namespace App\Controller;


/**
 * Class EventsController
 * @package App\Controller
 * @property \App\Model\Table\EventsTable $Events
 * @property \Cake\Controller\Component\FlashComponent $Flash
 */
class EventsController extends AppController{

  /**
   * Action for adding events.
   */
  public function add() {
    $event = $this->Events->newEntity($this->request->data());
    if($this->request->is('post')) {
      if($this->Events->save($event)) {
        $this->Flash->success('The Event was successfully saved.');
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error('The Event could not be saved. Please check the submitted data and try again.');
    }
    $this->set(compact('event'));
  }
} 