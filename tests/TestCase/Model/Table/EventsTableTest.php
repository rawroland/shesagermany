<?php

namespace App\Test\TestCase\Model\Table;

use App\Model\Entity\Event;
use App\Model\Table\EventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

class EventsTableTest extends TestCase
{
  public $fixtures = [
    'Events' => 'app.Events',
    'Activities' => 'app.Activities',
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
    'start' => '2015-07-11',
    'end' => '2015-07-12',
  ];

    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Events') ? [] : ['className' => 'App\Model\Table\EventsTable'];
        $this->Events = TableRegistry::get('Events', $config);
    }

    public function tearDown()
    {
        parent::tearDown();
        unset($this->Events);
    }

    public function testValidationFailsWithEmptyData()
    {
        $event = $this->Events->newEntity([]);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $this->assertFalse($this->Events->save($event), 'Event was saved without the title field.');
    }

    public function testValidationFailsWithoutTitle()
    {
        unset($this->data['title']);
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $this->assertFalse($this->Events->save($event), 'Event was saved without the title field.');
    }

    public function testValidationFailsWithEmptyTitle()
    {
        $this->data['title'] = '';
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $actual = $errors['title']['_empty'];
        $expected = 'Please provide a title for the event.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown.');
        $this->assertFalse($this->Events->save($event), 'Event was saved with an empty title value.');
    }

    public function testValidationFailsWithShortTitle()
    {
        $this->data['title'] = 'Short';
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $actual = $errors['title']['validLength'];
        $expected = 'The length of the event title must be between 10 and 128.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short title length.');
        $this->assertFalse($this->Events->save($event), 'Event was saved with a short title field.');
    }

    public function testValidationFailsWithLongTitle()
    {
        $this->data['title'] = 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,
    phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed,
    mollitia lectus. Nulla vestibulum massa neque ut et.';
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $actual = $errors['title']['validLength'];
        $expected = 'The length of the event title must be between 10 and 128.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short title length.');
        $this->assertFalse($this->Events->save($event), 'Event was saved with a short title field.');
    }

    public function testValidationFailsWithoutDescription()
    {
        unset($this->data['description']);
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the description field');
        $this->assertFalse($this->Events->save($event), 'Event was saved without the description field.');
    }

    public function testValidationFailsWithEmptyDescription()
    {
        $this->data['description'] = '';
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the description field');
        $actual = $errors['description']['_empty'];
        $expected = 'Please provide a description for the event.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an empty description value.');
        $this->assertFalse($this->Events->save($event), 'Event was saved with an empty description value.');
    }

    public function testValidationFailsWithoutLocation()
    {
        unset($this->data['location']);
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the location field');
        $this->assertFalse($this->Events->save($event), 'Event was saved without the location field.');
    }

    public function testValidationFailsWithEmptyLocation()
    {
        $this->data['location'] = '';
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the location field');
        $actual = $errors['location']['_empty'];
        $expected = 'Please provide a location for the event.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an empty location value.');
        $this->assertFalse($this->Events->save($event), 'Event was saved with an empty location value.');
    }

    public function testValidationFailsWithInvalidDescriptionData()
    {
        $this->data['description'] = 'Short description';
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with a short description value.');
        $actual = $errors['description']['minLength'];
        $expected = 'The length of the event description must be greater than 50.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short description length.');
        $this->assertFalse($this->Events->save($event), 'Event was saved with a short description value.');
    }

    public function testValidationFailsWithoutStartDate()
    {
        unset($this->data['start']);
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the date field');
        $this->assertFalse($this->Events->save($event), 'Event was saved without the date field.');
    }

    public function testValidationFailsWithEmptyStartDate()
    {
        $this->data['start'] = '';
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the date field');
        $actual = $errors['start']['_empty'];
        $expected = 'Please provide a start date for the event.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an empty date value.');
        $this->assertFalse($this->Events->save($event), 'Event was saved with an empty date value.');
    }

    /**
     * @todo Possible invalid date inputs.
     */
    public function testValidationFailsWithInvalidStartDateData()
    {
        $this->data['start'] = '2014';
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with an invalid date value.');
        $actual = $errors['start']['validStartDate'];
        $expected = __('Please provide a valid start date. Allowed format is DD-MM-YYYY.');
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an invalid date.');
        $this->assertFalse($this->Events->save($event), 'Event was saved with an invalid date.');
    }


    public function testValidationFailsWithoutEndDate()
    {
        unset($this->data['start']);
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the date field');
        $this->assertFalse($this->Events->save($event), 'Event was saved without the date field.');
    }

    public function testValidationFailsWithEmptyEndDate()
    {
        $this->data['end'] = '';
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the end date field');
        $actual = $errors['end']['_empty'];
        $expected = 'Please provide an end date for the event.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an empty end date value.');
        $this->assertFalse($this->Events->save($event), 'Event was saved with an empty end date value.');
    }

    /**
     * @todo Possible invalid date inputs.
     */
    public function testValidationFailsWithInvalidEndDateData()
    {
        $this->data['end'] = '2014';
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with an invalid date value.');
        $actual = $errors['end']['validEndDate'];
        $expected = __('Please provide a valid end date. Allowed format is DD-MM-YYYY.');
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an invalid end date.');
        $this->assertFalse($this->Events->save($event), 'Event was saved with an invalid end date.');
    }

    /**
     * @expectedException \Cake\Datasource\Exception\RecordNotFoundException
     */
    public function testNonexistentEventNotFoundForDeleting()
    {
        $this->Events->customDelete(11);
    }

    public function testDeleteSuccessful()
    {
        $event = $this->Events->get(1, ['contain' => ['Activities']]);
        $this->assertFalse($event->deleted, 'Event is deleted.');
        $deletedActivities = 0;
        foreach ($event->activities as $activity) {
            if ($activity->deleted) {
                $deletedActivities++;
            }
        }
        $totalActivities = count($event->activities);
        $this->assertFalse((bool) $deletedActivities, "$deletedActivities activities out of $totalActivities are deleted.");

        $this->assertTrue((bool) $this->Events->customDelete(1));
        $event = $this->Events->get(1, ['contain' => ['Activities']]);
        $this->assertTrue($event->deleted, 'Event was not deleted.');
        $activeActivities = 0;
        foreach ($event->activities as $activity) {
            if (!$activity->deleted) {
                $activeActivities++;
            }
        }
        $totalActivities = count($event->activities);
        $this->assertFalse((bool) $activeActivities, "$activeActivities activities out of $totalActivities were not deleted.");
    }
}
