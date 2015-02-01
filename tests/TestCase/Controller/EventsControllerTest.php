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

  public function setUp() {
    parent::setUp();
  }

  public function tearDown() {
    parent::tearDown();
  }

  public function testAddPageLoads() {
    $this->get('events/add');
    $this->assertResponseOk();
  }

  public function testAddFailsWithInvalidData() {
    $data = [];
    $this->post('/events/add', $data);
    $events = TableRegistry::get('Events');
    $query = $events->find('all');
    $this->assertEquals(10, $query->count(), 'No Events were added without a title');
  }
}
