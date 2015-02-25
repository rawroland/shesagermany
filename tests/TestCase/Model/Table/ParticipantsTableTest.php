<?php

namespace App\Test\TestCase\Model\Table;

use App\Model\Entity\Participant;
use App\Model\Table\ParticipantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

class ParticipantsTableTest extends TestCase
{
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

    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Participants') ? [] : ['className' => 'App\Model\Table\ParticipantsTable'];
        $this->Participants = TableRegistry::get('Participants', $config);
    }

    public function tearDown()
    {
        parent::tearDown();
        unset($this->Participants);
    }

    public function testValidationFailsWithEmptydata()
    {
        $participant = $this->Participants->newEntity([]);
        $errors = $participant->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $this->assertFalse($this->Participants->save($participant), 'Participant was saved without the title field.');
    }

    public function testValidationFailsWithoutType()
    {
        unset($this->data['type']);
        $participant = $this->Participants->newEntity($this->data);
        $errors = $participant->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the type field');
        $this->assertFalse($this->Participants->save($participant), 'Participant was saved without the type field.');
    }

    public function testValidationFailsWithEmptyType()
    {
        $this->data['type'] = '';
        $participant = $this->Participants->newEntity($this->data);
        $errors = $participant->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the type field');
        $actual = $errors['type']['_empty'];
        $expected = 'Please provide a type for the participant!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown.');
        $this->assertFalse($this->Participants->save($participant), 'Participant was saved with an empty type value.');
    }

    public function testValidationFailsWithInvalidType()
    {
        $this->data['type'] = 'invalid';
        $participant = $this->Participants->newEntity($this->data);
        $errors = $participant->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with an invalid type value');
        $actual = $errors['type']['validType'];
        $expected = 'The provided participant type is invalid!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short type length.');
        $this->assertFalse($this->Participants->save($participant), 'Participant was saved with a short type field.');
    }

    public function testValidationSucceedsWithPersonType()
    {
        $this->data['type'] = Participant::TYPE_PERSON;
        $participant = $this->Participants->newEntity($this->data);
        $errors = $participant->errors();
        $this->assertTrue(empty($errors), 'Errors were triggered with a valid type "person"!');
        $this->assertTrue((bool) $this->Participants->save($participant), 'Participant could not be saved with a valid type of person.');
    }

    public function testValidationSucceedsWithOrganizationType()
    {
        $this->data['type'] = Participant::TYPE_ORGANIZATION;
        $participant = $this->Participants->newEntity($this->data);
        $errors = $participant->errors();
        $this->assertTrue(empty($errors), 'Errors were triggered with a valid type "organization"!');
        $this->assertTrue((bool) $this->Participants->save($participant), 'Participant could not be saved with a valid type of organization.');
    }

    public function testValidationFailsWithoutRole()
    {
        unset($this->data['role']);
        $participant = $this->Participants->newEntity($this->data);
        $errors = $participant->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the role field');
        $this->assertFalse($this->Participants->save($participant), 'Participant was saved without the role field.');
    }

    public function testValidationFailsWithEmptyRole()
    {
        $this->data['role'] = '';
        $participant = $this->Participants->newEntity($this->data);
        $errors = $participant->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the role field');
        $actual = $errors['role']['_empty'];
        $expected = 'Please provide a role for the participant!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown.');
        $this->assertFalse($this->Participants->save($participant), 'Participant was saved with an empty role value.');
    }

    public function testValidationFailsWithInvalidRole()
    {
        $this->data['role'] = 'invalid';
        $participant = $this->Participants->newEntity($this->data);
        $errors = $participant->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with an invalid role value');
        $actual = $errors['role']['validRole'];
        $expected = 'The provided participant role is invalid!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short role length.');
        $this->assertFalse($this->Participants->save($participant), 'Participant was saved with a short role field.');
    }

    public function testValidationSucceedsWithTeamRole()
    {
        $this->data['role'] = Participant::ROLE_TEAM;
        $participant = $this->Participants->newEntity($this->data);
        $errors = $participant->errors();
        $this->assertTrue(empty($errors), 'Errors were triggered with a valid role "team"!');
        $this->assertTrue((bool) $this->Participants->save($participant), 'Participant could not be saved with a valid role of team.');
    }

    public function testValidationSucceedsWithOrganizationRole()
    {
        $this->data['role'] = Participant::ROLE_SPEAKER;
        $participant = $this->Participants->newEntity($this->data);
        $errors = $participant->errors();
        $this->assertTrue(empty($errors), 'Errors were triggered with a valid role "speaker"!');
        $this->assertTrue((bool) $this->Participants->save($participant), 'Participant could not be saved with a valid role of speaker.');
    }

    public function testValidationFailsWithoutDescription()
    {
        unset($this->data['description']);
        $participant = $this->Participants->newEntity($this->data);
        $errors = $participant->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the description field');
        $this->assertFalse($this->Participants->save($participant), 'Participant was saved without the description field.');
    }

    public function testValidationFailsWithEmptyDescription()
    {
        $this->data['description'] = '';
        $participant = $this->Participants->newEntity($this->data);
        $errors = $participant->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the description field');
        $actual = $errors['description']['_empty'];
        $expected = 'Please provide a description for the participant!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an empty description value.');
        $this->assertFalse($this->Participants->save($participant), 'Participant was saved with an empty description value.');
    }

    public function testValidationFailsWithInvalidDescriptionData()
    {
        $this->data['description'] = 'Short description';
        $participant = $this->Participants->newEntity($this->data);
        $errors = $participant->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with a short description value.');
        $actual = $errors['description']['minLength'];
        $expected = 'The length of the participant description must be greater than 50.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short description length.');
        $this->assertFalse($this->Participants->save($participant), 'Participant was saved with a short description value.');
    }
}
