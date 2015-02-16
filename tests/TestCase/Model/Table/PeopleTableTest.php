<?php

namespace App\Test\TestCase\Model\Table;

use App\Model\Entity\Participant;
use App\Model\Entity\Person;
use App\Model\Table\PeopleTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

class PeopleTableTest extends TestCase
{

    public $fixtures = [
        'People' => 'app.People',
    ];

    /**
     * @var PeopleTable
     */
    public $People = null;

    /**
     * @var array Test data
     */
    public $data = [
        'id' => 1,
        'surname' => Person::TITLE_DR,
        'surname' => 'Doe',
        'name' => 'John',
        'participant_id' => 1,
        'created' => 1424016409,
        'modified' => 1424016409,
    ];

    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('People') ? [] : ['className' => 'App\Model\Table\PeopleTable'];
        $this->People = TableRegistry::get('People', $config);
    }

    public function tearDown()
    {
        parent::tearDown();
        unset($this->People);
    }

    public function testValidationFailsWithoutSurname()
    {
        unset($this->data['surname']);
        $participant = $this->People->newEntity($this->data);
        $errors = $participant->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the type field');
        $this->assertFalse($this->People->save($participant), 'Participant was saved without the type field.');
    }

    public function testValidationFailsWithEmptySurname()
    {
        $this->data['surname'] = '';
        $event = $this->People->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the surname field');
        $actual = $errors['surname']['_empty'];
        $expected = 'Please provide a surname!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown.');
        $this->assertFalse($this->People->save($event), 'Event was saved with an empty surname value.');
    }

    public function testValidationFailsWithShortSurname()
    {
        $this->data['surname'] = 'S';
        $event = $this->People->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the Surname field');
        $actual = $errors['surname']['validLength'];
        $expected = 'The surname must be at least 2 characters and at most 128 characters long!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short Surname length.');
        $this->assertFalse($this->People->save($event), 'Event was saved with a short Surname field.');
    }

    public function testValidationFailsWithLongSurname()
    {
        $this->data['surname'] = 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,
    phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed,
    mollitia lectus. Nulla vestibulum massa neque ut et.';
        $event = $this->People->newEntity($this->data);
        $errors = $event->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the Surname field');
        $actual = $errors['surname']['validLength'];
        $expected = 'The surname must be at least 2 characters and at most 128 characters long!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short Surname length.');
        $this->assertFalse($this->People->save($event), 'Event was saved with a short Surname field.');
    }
}
