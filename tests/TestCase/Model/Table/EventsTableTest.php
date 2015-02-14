<?php

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

class EventsTableTest extends TestCase
{

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

    public function testValidationFailsWithoutDate()
    {
        unset($this->data['date']);
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the date field');
        $this->assertFalse($this->Events->save($event), 'Event was saved without the date field.');
    }

    public function testValidationFailsWithEmptyDate()
    {
        $this->data['date'] = '';
        $event = $this->Events->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the date field');
        $actual = $errors['date']['_empty'];
        $expected = 'Please provide a date for the event.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an empty date value.');
        $this->assertFalse($this->Events->save($event), 'Event was saved with an empty date value.');
    }

  /**
   * @todo Possible invalid date inputs.
   */
  public function testValidationFailsWithInvalidDateData()
  {
      $this->data['date'] = '2014';
      $event = $this->Events->newEntity($this->data);
      $errors = $event->errors();
      $this->assertTrue(!empty($errors), 'No errors were triggered with an invalid date value.');
      $actual = $errors['date']['validDate'];
      $expected = __('Please provide a valid date. Allowed format is DD-MM-YYYY.');
      $this->assertEquals($expected, $actual, 'Wrong error message was shown for an invalid date.');
      $this->assertFalse($this->Events->save($event), 'Event was saved with an invalid date.');
  }
}
