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
      'event_id' => 1,
      'title' => 'Be your own boss',
      'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
      'start_time' => '2015-02-25 22:45:20',
      'end_time' => '2015-02-25 22:45:20',
      'deleted' => 0,
      'created' => 1424904320,
      'modified' => 1424904320,
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

    public function testValidationFailsWithEmptydata()
    {
        $activity = $this->Activities->newEntity([]);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $this->assertFalse($this->Activities->save($activity), 'Activity was saved without the title field.');
    }

    public function testValidationFailsWithoutTitle()
    {
        unset($this->data['title']);
        $activity = $this->Activities->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $this->assertFalse($this->Activities->save($activity), 'Activity was saved without the title field.');
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
        $this->assertFalse($this->Activities->save($activity), 'Activity was saved with an empty title value.');
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
        $this->assertFalse($this->Activities->save($activity), 'Activity was saved with a short title field.');
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
        $this->assertFalse($this->Activities->save($activity), 'Activity was saved with a short title field.');
    }

    public function testValidationFailsWithoutDescription()
    {
        unset($this->data['description']);
        $activity = $this->Activities->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the description field');
        $this->assertFalse($this->Activities->save($activity), 'Activity was saved without the description field.');
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
        $this->assertFalse($this->Activities->save($activity), 'Activity was saved with an empty description value.');
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
        $this->assertFalse($this->Activities->save($activity), 'Activity was saved with a short description value.');
    }

    public function testValidationFailsWithoutStartTime()
    {
        unset($this->data['start_time']);
        $activity = $this->Activities->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the date field');
        $this->assertFalse($this->Activities->save($activity), 'Activity was saved without the date field.');
    }

    public function testValidationFailsWithEmptyStartTime()
    {
        $this->data['start_time'] = '';
        $activity = $this->Activities->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the date field');
        $actual = $errors['start_time']['_empty'];
        $expected = 'Please provide a start date and time for the activity.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an empty start time value.');
        $this->assertFalse($this->Activities->save($activity), 'Activity was saved with an empty start timevalue.');
    }

  /**
   * @todo Possible invalid date inputs.
   */
  public function testValidationFailsWithInvalidStartDateTimeData()
  {
      $this->data['start_time'] = '2014-01-01';
      $activity = $this->Activities->newEntity($this->data);
      $errors = $activity->errors();
      $this->assertTrue(!empty($errors), 'No errors were triggered with an invalid start date and time value.');
      $actual = $errors['start_time']['validStartDateTime'];
      $expected = __('Please provide a valid start date and time for the activity.');
      $this->assertEquals($expected, $actual, 'Wrong error message was shown for an invalid date.');
      $this->assertFalse($this->Activities->save($activity), 'Activity was saved with an invalid start date and time.');
  }

    public function testValidationFailsWithoutEndTime()
    {
        unset($this->data['end_time']);
        $activity = $this->Activities->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the end time field');
        $this->assertFalse($this->Activities->save($activity), 'Activity was saved without the date field.');
    }

    public function testValidationFailsWithEmptyEndTime()
    {
        $this->data['end_time'] = '';
        $activity = $this->Activities->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the end time field');
        $actual = $errors['end_time']['_empty'];
        $expected = 'Please provide a end date and time for the activity.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an empty start time value.');
        $this->assertFalse($this->Activities->save($activity), 'Activity was saved with an empty end time value.');
    }

  /**
   * @todo Possible invalid date inputs.
   */
  public function testValidationFailsWithInvalidEndDateTimeData()
  {
      $this->data['end_time'] = '2014-01-01';
      $activity = $this->Activities->newEntity($this->data);
      $errors = $activity->errors();
      $this->assertTrue(!empty($errors), 'No errors were triggered with an invalid start date and time value.');
      $actual = $errors['end_time']['validEndDateTime'];
      $expected = __('Please provide a valid end date and time for the activity.');
      $this->assertEquals($expected, $actual, 'Wrong error message was shown for an invalid date.');
      $this->assertFalse($this->Activities->save($activity), 'Activity was saved with an invalid start date and time.');
  }
}
