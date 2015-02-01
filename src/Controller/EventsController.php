<?php
namespace App\Controller;

/**
 * Class EventsController
 * @package App\Controller
 * @property \App\Model\Table\EventsTable $Events
 */
class EventsController extends AppController{


  public function add() {
    $event = $this->Events->newEntity($this->request->data());

    $this->set(compact('event'));
  }
} 