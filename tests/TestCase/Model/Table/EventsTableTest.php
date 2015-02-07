<?php

namespace App\Test\TestCase\Model\Table;


use App\Model\Table\EventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

class EventsTableTest extends TestCase {

  public $fixtures = [
    'Events' => 'app.Events',
  ];

  /**
   * @var EventsTable
   */
  public $Events = null;

  /**
   * @var array Test data
   */
  public $data = [
    'title' => 'SHESA Germany SG7',
    'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,
    phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed,
    mollitia lectus. Nulla vestibulum massa neque ut et.',
    'date' => '2015-07-11',
  ];

  public function setUp() {
    parent::setUp();
    $config = TableRegistry::exists('Events') ? [] : ['className' => 'App\Model\Table\EventsTable'];
    $this->Events = TableRegistry::get('Events', $config);
  }

  public function tearDown() {
    parent::tearDown();
    unset($this->Events);
  }

  public function testValidationFailsWithoutTitle() {
    unset($this->data['title']);
    $event = $this->Events->newEntity($this->data);
    $errors = $event->errors();
    var_dump($errors);
    $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
  }
}
 