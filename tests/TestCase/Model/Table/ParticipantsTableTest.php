<?php

namespace App\Test\TestCase\Model\Table;


use App\Model\Table\ParticipantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

class ParticipantsTableTest extends TestCase {

  public $fixtures = [
    'Participants' => 'app.Participants',
  ];

  /**
   * @var ParticipantsTable
   */
  public $Participants = null;

  /**
   * @var array Test data
   */
  public $data = [
    'type' => 'person',
    'role' => 'Speaker',
    'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,
    phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed,
    mollitia lectus. Nulla vestibulum massa neque ut et.',
    'project_id' => null,
      'activity_id' => 1,
  ];

  public function setUp() {
    parent::setUp();
    $config = TableRegistry::exists('Participants') ? [] : ['className' => 'App\Model\Table\ParticipantsTable'];
    $this->Participants = TableRegistry::get('Participants', $config);
  }

  public function tearDown() {
    parent::tearDown();
    unset($this->Participants);
  }

  public function testValidationFailsWithoutType() {
    unset($this->data['type']);
    $participant = $this->Participants->newEntity($this->data);
    $errors = $participant->errors();
    $this->assertTrue(!empty($errors), 'No errors were triggered without the type field');
    $this->assertFalse($this->Participants->save($participant), 'Participant was saved without the type field.');
  }

  public function testValidationFailsWithEmptyType() {
    $this->data['type'] = '';
    $participant = $this->Participants->newEntity($this->data);
    $errors = $participant->errors();
    $this->assertTrue(!empty($errors), 'No errors were triggered without the type field');
    $actual = $errors['type']['_empty'];
    $expected = 'Please provide a type for the participant!';
    $this->assertEquals($expected, $actual, 'Wrong error message was shown.');
    $this->assertFalse($this->Participants->save($participant), 'Participant was saved with an empty type value.');
  }

  public function testValidationFailsWithShortType() {
    $this->data['type'] = 'Short';
    $participant = $this->Participants->newEntity($this->data);
    $errors = $participant->errors();
    $this->assertTrue(!empty($errors), 'No errors were triggered without the type field');
    $actual = $errors['type']['validLength'];
    $expected = 'The length of the participant type must be between 10 and 128.';
    $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short type length.');
    $this->assertFalse($this->Participants->save($participant), 'Participant was saved with a short type field.');
  }

  public function testValidationFailsWithLongType() {
    $this->data['type'] = 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,
    phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed,
    mollitia lectus. Nulla vestibulum massa neque ut et.';
    $participant = $this->Participants->newEntity($this->data);
    $errors = $participant->errors();
    $this->assertTrue(!empty($errors), 'No errors were triggered without the type field');
    $actual = $errors['type']['validLength'];
    $expected = 'The length of the participant type must be between 10 and 128.';
    $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short type length.');
    $this->assertFalse($this->Participants->save($participant), 'Participant was saved with a short type field.');
  }

  public function testValidationFailsWithoutDescription() {
    unset($this->data['description']);
    $participant = $this->Participants->newEntity($this->data);
    $errors = $participant->errors();
    $this->assertTrue(!empty($errors), 'No errors were triggered without the description field');
    $this->assertFalse($this->Participants->save($participant), 'Participant was saved without the description field.');
  }

  public function testValidationFailsWithEmptyDescription() {
    $this->data['description'] = '';
    $participant = $this->Participants->newEntity($this->data);
    $errors = $participant->errors();
    $this->assertTrue(!empty($errors), 'No errors were triggered without the description field');
    $actual = $errors['description']['_empty'];
    $expected = 'Please provide a description for the participant.';
    $this->assertEquals($expected, $actual, 'Wrong error message was shown for an empty description value.');
    $this->assertFalse($this->Participants->save($participant), 'Participant was saved with an empty description value.');
  }

  public function testValidationFailsWithInvalidDescriptionData() {
    $this->data['description'] = 'Short description';
    $participant = $this->Participants->newEntity($this->data);
    $errors = $participant->errors();
    $this->assertTrue(!empty($errors), 'No errors were triggered with a short description value.');
    $actual = $errors['description']['minLength'];
    $expected = 'The length of the participant description must be greater than 50.';
    $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short description length.');
    $this->assertFalse($this->Participants->save($participant), 'Participant was saved with a short description value.');
  }

  public function testValidationFailsWithoutDate() {
    unset($this->data['date']);
    $participant = $this->Participants->newEntity($this->data);
    $errors = $participant->errors();
    $this->assertTrue(!empty($errors), 'No errors were triggered without the date field');
    $this->assertFalse($this->Participants->save($participant), 'Participant was saved without the date field.');
  }

  public function testValidationFailsWithEmptyDate() {
    $this->data['date'] = '';
    $participant = $this->Participants->newEntity($this->data);
    $errors = $participant->errors();
    $this->assertTrue(!empty($errors), 'No errors were triggered without the date field');
    $actual = $errors['date']['_empty'];
    $expected = 'Please provide a date for the participant.';
    $this->assertEquals($expected, $actual, 'Wrong error message was shown for an empty date value.');
    $this->assertFalse($this->Participants->save($participant), 'Participant was saved with an empty date value.');
  }

  /**
   * @todo Possible invalid date inputs.
   */
  public function testValidationFailsWithInvalidDateData() {
    $this->data['date'] = '2014';
    $participant = $this->Participants->newEntity($this->data);
    $errors = $participant->errors();
    $this->assertTrue(!empty($errors), 'No errors were triggered with an invalid date value.');
    $actual = $errors['date']['validDate'];
    $expected = __('Please provide a valid date. Allowed format is DD-MM-YYYY.');
    $this->assertEquals($expected, $actual, 'Wrong error message was shown for an invalid date.');
    $this->assertFalse($this->Participants->save($participant), 'Participant was saved with an invalid date.');
  }
}
 