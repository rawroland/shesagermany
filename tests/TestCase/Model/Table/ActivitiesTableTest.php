<?php

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

class ActivitiesTableTest extends TestCase
{

  public $fixtures = [
    'Activities' => 'app.Activities',
  ];

  /**
   * @var ActivitiesTable
   */
  public $Activities = null;

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
        $config = TableRegistry::exists('Activities') ? [] : ['className' => 'App\Model\Table\ActivitiesTable'];
        $this->Activities = TableRegistry::get('Activities', $config);
    }

    public function tearDown()
    {
        parent::tearDown();
        unset($this->Activities);
    }

    public function testValidationFailsWithoutTitleForUpdate()
    {
        $activity = $this->Activities->get(1);
        unset($this->data['title']);
        $this->Activities->patchEntity($activity, $this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $this->assertFalse($this->Activities->save($activity), 'Event was saved without the title field.');
    }

    public function testValidationFailsWithEmptyTitle()
    {
        $this->data['title'] = '';
        $activity = $this->Activities->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $actual = $errors['title']['_empty'];
        $expected = 'Please provide a title for the event.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown.');
        $this->assertFalse($this->Activities->save($activity), 'Event was saved with an empty title value.');
    }

    public function testValidationFailsWithShortTitle()
    {
        $this->data['title'] = 'Short';
        $activity = $this->Activities->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $actual = $errors['title']['validLength'];
        $expected = 'The length of the event title must be between 10 and 128.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short title length.');
        $this->assertFalse($this->Activities->save($activity), 'Event was saved with a short title field.');
    }

    public function testValidationFailsWithLongTitle()
    {
        $this->data['title'] = 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,
    phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed,
    mollitia lectus. Nulla vestibulum massa neque ut et.';
        $activity = $this->Activities->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $actual = $errors['title']['validLength'];
        $expected = 'The length of the event title must be between 10 and 128.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short title length.');
        $this->assertFalse($this->Activities->save($activity), 'Event was saved with a short title field.');
    }

    public function testValidationFailsWithoutDescription()
    {
        $activity = $this->Activities->get(1);
        unset($this->data['description']);
        $this->Activities->patchEntity($activity, $this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the description field');
        $this->assertFalse($this->Activities->save($activity), 'Event was saved without the description field.');
    }

    public function testValidationFailsWithEmptyDescription()
    {
        $this->data['description'] = '';
        $activity = $this->Activities->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the description field');
        $actual = $errors['description']['_empty'];
        $expected = 'Please provide a description for the event.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an empty description value.');
        $this->assertFalse($this->Activities->save($activity), 'Event was saved with an empty description value.');
    }

    public function testValidationFailsWithInvalidDescriptionData()
    {
        $this->data['description'] = 'Short description';
        $activity = $this->Activities->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with a short description value.');
        $actual = $errors['description']['minLength'];
        $expected = 'The length of the event description must be greater than 50.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short description length.');
        $this->assertFalse($this->Activities->save($activity), 'Event was saved with a short description value.');
    }

    public function testValidationFailsWithoutDateForUpate()
    {
        $activity = $this->Activities->get(1);
        unset($this->data['date_time']);
        $this->Activities->patchEntity($activity, $this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the date field');
        $this->assertFalse($this->Activities->save($activity), 'Event was saved without the date field.');
    }

    public function testValidationFailsWithEmptyDate()
    {
        $this->data['date_time'] = '';
        $activity = $this->Activities->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the date field');
        $actual = $errors['date_time']['_empty'];
        $expected = 'Please provide a date for the event.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an empty date value.');
        $this->assertFalse($this->Activities->save($activity), 'Event was saved with an empty date value.');
    }

  /**
   * @todo Possible invalid date inputs.
   */
  public function testValidationFailsWithInvalidDateTimeData()
  {
      $this->data['date_time'] = '2014-01-01';
      $activity = $this->Activities->newEntity($this->data);
      $errors = $activity->errors();
      $this->assertTrue(!empty($errors), 'No errors were triggered with an invalid date value.');
      $actual = $errors['date_time']['validDateTime'];
      $expected = __('Please provide a valid date. Allowed format is DD-MM-YYYY.');
      $this->assertEquals($expected, $actual, 'Wrong error message was shown for an invalid date.');
      $this->assertFalse($this->Activities->save($activity), 'Event was saved with an invalid date.');
  }
}
