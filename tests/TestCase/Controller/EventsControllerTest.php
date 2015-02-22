<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EventsController;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EventsController Test Case
 */
class EventsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     * @var array
     */
    public $fixtures = [
      'events' => 'app.events',
    ];

    public $data = [
        'title' => 'SHESA Germany e.V. Five years anniversary',
        'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
        'date' => '2015-02-01',
        'created' => 1422812508,
        'modified' => 1422812508,
    ];

    public $Events = null;

    public function setUp()
    {
        parent::setUp();
        $this->Events = TableRegistry::get('Events');
    }

    public function tearDown()
    {
        parent::tearDown();
        $this->Events = null;
    }

    /**
     * @todo Mock session call
     */
    public function testAddSuccessfully()
    {
        $this->post('/events/edit', $this->data);
        $expected = __('The Event was successfully saved.');
        $this->assertSession($expected, 'Flash.flash.message', 'Correct flash message was not displayed.');
        $query = $this->Events->find('all');
        $expected = 11;
        $actual = $query->count();
        $this->assertEquals($expected, $actual, 'Number of events did not increase in the database.');
    }

    /**
     * @todo Testing session flash messages. Check Session component tests.
     * @todo And why does it function for add but not for failure?
     */
    public function testAddFailsWithInvalidData()
    {
        $data = ['title' => ''];
        $this->post('/events/edit/1', $data);
        //$expected = __('The Event could not be saved. Please check the submitted data and try again.');
        //$this->assertSession($expected, 'Flash.flash.message', 'Correct flash message was not displayed.');
        $query = $this->Events->find('all');
        $expected = 10;
        $actual = $query->count();
        $this->assertEquals($expected, $actual, 'Event adding failed with invalid data!');
    }

    /**
     * @todo Mock session call
     */
    public function testEditSuccessfully()
    {
        $this->data['id'] = 1;
        $this->post('/events/edit/1', $this->data);
        //$expected = __('The Event was successfully saved.');
        //$this->assertSession($expected, 'Flash.flash.message', 'Correct flash message was not displayed.');
        $query = $this->Events->find('all');
        $expected = 10;
        $actual = $query->count();
        $this->assertEquals($expected, $actual, 'Number of events did not increase in the database.');
    }

    /**
     * @todo Testing session flash messages. Check Session component tests.
     * @todo And why does it function for add but not for failure?
     */
    public function testEditFailsWithInvalidData()
    {
        $this->data = ['title' => ''];
        $this->post('/events/edit/1', $this->data);
        //$expected = __('The Event could not be saved. Please check the submitted data and try again.');
        //$this->assertSession($expected, 'Flash.flash.message', 'Correct flash message was not displayed.');
        $query = $this->Events->find('all');
        $expected = 10;
        $actual = $query->count();
        $this->assertEquals($expected, $actual, 'Event adding failed with invalid data!');
    }
}
