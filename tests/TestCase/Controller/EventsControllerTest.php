<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EventsController;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EventsController Test Case
 */
class EventsControllerTest extends IntegrationTestCase {

  /**
   * Fixtures
   * @var array
   */
  public $fixtures = [
    'events' => 'app.events'
  ];

  public $data = [
    'title' => 'SHESA Germany SG7',
    'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,
    phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed,
    mollitia lectus. Nulla vestibulum massa neque ut et.',
    'date' => '2015-07-11',
  ];

  public $Events = null;

  public function setUp() {
    parent::setUp();
    $this->Events = TableRegistry::get('Events');
  }

  public function tearDown() {
    parent::tearDown();
    $this->Events = null;
  }

  public function testAddPageLoads() {
    $this->get('events/add');
    $this->assertResponseOk();
  }

  /**
   * @todo Mock session call
   */
  public function testAddSuccessfully() {
    $this->post('/events/add', $this->data);
    $expected = __('The Event was successfully saved.');
    $this->assertSession($expected, 'Flash.flash.message', 'Correct flash message was not displayed.');
    $query = $this->Events->find('all');
    $expected = 11;
    $actual = $query->count();
    $this->assertEquals($expected, $actual, 'Number of events did not increase in the database.');
  }

  public function testAddFailsWithEmptyData() {
    $data = [];
    $this->post('/events/add', $data);
    $expected = __('The Event could not be saved. Please check the submitted data and try again.');
    $this->assertSession($expected, 'Flash.flash.message', 'Correct flash message was not displayed.');
    $query = $this->Events->find('all');
    $expected = 10;
    $actual = $query->count();
    $this->assertEquals($expected, $actual, 'No Events were added without a title');
  }
}
