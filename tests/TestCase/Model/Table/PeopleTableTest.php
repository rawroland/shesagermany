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

    public function testValidationPassesWithAnInvalidTitle()
    {
        $this->data['title'] = 'Dds';
        $person = $this->People->newEntity($this->data);
        $errors = $person->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with an invalid title value.');
        $actual = $errors['title']['validTitle'];
        $expected = 'Valid values for the title are Dr., Mr and Mrs!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown.');
        $this->assertFalse($this->People->save($person), 'Person was saved with an invalid title value.');
    }

    public function testValidationFailsWithoutSurnameForUpdate()
    {
        $person = $this->People->get(1);
        unset($this->data['surname']);
        $this->People->patchEntity($person, $this->data);
        $errors = $person->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the type field');
        $this->assertFalse($this->People->save($person), 'Participant was saved without the type field.');
    }

    public function testValidationFailsWithEmptySurname()
    {
        $this->data['surname'] = '';
        $person = $this->People->newEntity($this->data);
        $errors = $person->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the surname field');
        $actual = $errors['surname']['_empty'];
        $expected = 'Please provide a surname!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown.');
        $this->assertFalse($this->People->save($person), 'Person was saved with an empty surname value.');
    }

    public function testValidationFailsWithShortSurname()
    {
        $this->data['surname'] = 'S';
        $person = $this->People->newEntity($this->data);
        $errors = $person->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the Surname field');
        $actual = $errors['surname']['validLength'];
        $expected = 'The surname must be at least 2 characters and at most 128 characters long!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short surname length.');
        $this->assertFalse($this->People->save($person), 'Person was saved with a short surname field.');
    }

    public function testValidationFailsWithLongSurname()
    {
        $this->data['surname'] = 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,
    phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed,
    mollitia lectus. Nulla vestibulum massa neque ut et.';
        $person = $this->People->newEntity($this->data);
        $errors = $person->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the Surname field');
        $actual = $errors['surname']['validLength'];
        $expected = 'The surname must be at least 2 characters and at most 128 characters long!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short Surname length.');
        $this->assertFalse($this->People->save($person), 'Person was saved with a short surname field.');
    }

    public function testValidationFailsWithShortName()
    {
        $this->data['name'] = 'S';
        $person = $this->People->newEntity($this->data);
        $errors = $person->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with a short name value.');
        $actual = $errors['name']['validLength'];
        $expected = 'The name must be at least 2 characters and at most 128 characters long!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short name length.');
        $this->assertFalse($this->People->save($person), 'Person was saved with a short name value.');
    }

    public function testValidationFailsWithLongName()
    {
        $this->data['name'] = 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,
    phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed,
    mollitia lectus. Nulla vestibulum massa neque ut et.';
        $person = $this->People->newEntity($this->data);
        $errors = $person->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with a short name value.');
        $actual = $errors['name']['validLength'];
        $expected = 'The name must be at least 2 characters and at most 128 characters long!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a long name length.');
        $this->assertFalse($this->People->save($person), 'Person was saved with a short Surname field.');
    }

    public function testValidationFailsWithoutNameForUpdate()
    {
        $person = $this->People->get(1);
        unset($this->data['name']);
        $this->People->patchEntity($person, $this->data);
        $errors = $person->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the type field');
        $this->assertFalse($this->People->save($person), 'Participant was saved without the type field.');
    }

    public function testValidationFailsWithEmptyName()
    {
        $this->data['name'] = '';
        $person = $this->People->newEntity($this->data);
        $errors = $person->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the surname field');
        $actual = $errors['name']['_empty'];
        $expected = 'Please provide a name!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown.');
        $this->assertFalse($this->People->save($person), 'Person was saved with an empty name value.');
    }

}
