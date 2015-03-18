<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EventsController;
use Cake\Network\Session;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EventsController Test Case.
 */
class EventsControllerTest extends IntegrationTestCase
{
    /**
     * Fixtures.
     *
     * @var array
     */
    public $fixtures = [
      'events' => 'app.events',
      'activities' => 'app.activities',
      'participants' => 'app.participants',
      'activities_participants' => 'app.activities_participants',
      'people' => 'app.people',
      'organization' => 'app.organizations',
    ];

    /**
     * @var array Test event data
     *
     * @todo Complete data with associations
     */
    public $data = [
        'title' => 'SHESA Germany e.V. Five years anniversary',
        'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
        'location' => 'Essen, Germany',
        'start' => '2015-02-01',
        'end' => '2015-02-03',
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
        $expected = [
            'message' => __('The Event was successfully saved.'),
            'key' => 'flash',
            'element' => 'Flash/success',
            'params' => [],
        ];
        $this->assertFlash($expected, 'Wrong flash message was returned');
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
        $expected = [
            'message' => "The Event could not be saved. Please check the submitted data and try again.",
            'key' => 'flash',
            'element' => 'Flash/error',
            'params' => [],
        ];
        $this->assertFlash($expected, 'Wrong flash message was returned');
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
        $expected = [
            'message' => "The Event was successfully saved.",
            'key' => 'flash',
            'element' => 'Flash/success',
            'params' => [],
        ];
        $this->assertFlash($expected, 'Wrong flash message was returned');
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
        $expected = [
            'message' => "The Event could not be saved. Please check the submitted data and try again.",
            'key' => 'flash',
            'element' => 'Flash/error',
            'params' => [],
        ];
        $this->assertFlash($expected, 'Wrong flash message was returned');
        $query = $this->Events->find('all');
        $expected = 10;
        $actual = $query->count();
        $this->assertEquals($expected, $actual, 'Event adding failed with invalid data!');
    }

    public function testDeleteFailsIfMethodIsPost()
    {
        $this->get('/events/delete/1');
        $this->assertResponseError();
    }

    public function testDeleteFailsForNonExistentEvent()
    {
        $this->post('/events/delete/15');
        $expected = [
            'message' => "The event with id 15 was not found!",
            'key' => 'flash',
            'element' => 'Flash/error',
            'params' => [],
        ];
        $this->assertFlash($expected, 'Wrong flash message was returned');
    }

    public function testDeleteSuccessful()
    {
        $this->post('/events/delete/1');
        $expected = [
            'message' => "The event with id 1 was successfully deleted!",
            'key' => 'flash',
            'element' => 'Flash/success',
            'params' => [],
        ];
        $this->assertFlash($expected, 'Wrong flash message was returned');
    }

    public function assertFlash($expected, $message = '')
    {
        if (empty($this->_requestSession)) {
            $this->fail('No session stored.');
        }
        $actual = $this->_requestSession->read('Flash.flash');
        $this->assertEquals($expected, $actual, $message);
    }

    public function testIndexSuccess()
    {
        $this->get('/events');
        $this->assertResponseOk();
        $events = $this->viewVariable('events');
        $this->assertTrue(!empty($events), 'Pagination results for events was not returned.');
    }
}
