<?php

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrganizationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

class OrganizationsTableTest extends TestCase
{

    public $fixtures = [
        'Organizations' => 'app.Organizations',
    ];

    /**
     * @var OrganizationsTable
     */
    public $Organizations = null;

    /**
     * @var array Test data
     */
    public $data = [
        'id' => 1,
        'name' => "Ex Student's Association",
        'participant_id' => 1,
        'created' => 1424016409,
        'modified' => 1424016409,
    ];

    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Organizations') ? [] : ['className' => 'App\Model\Table\OrganizationsTable'];
        $this->Organizations = TableRegistry::get('Organizations', $config);
    }

    public function tearDown()
    {
        parent::tearDown();
        unset($this->Organizations);
    }

    public function testValidationFailsWithEmptydata()
    {
        $organization = $this->Organizations->newEntity([]);
        $errors = $organization->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the title field');
        $this->assertFalse($this->Organizations->save($organization), 'Organization was saved without the title field.');
    }
    
    public function testValidationFailsWithShortName()
    {
        $this->data['name'] = 'S';
        $organization = $this->Organizations->newEntity($this->data);
        $errors = $organization->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with a short name value.');
        $actual = $errors['name']['validLength'];
        $expected = 'The name must be at least 2 characters and at most 128 characters long!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a short name length.');
        $this->assertFalse($this->Organizations->save($organization), 'Organization was saved with a short name value.');
    }

    public function testValidationFailsWithLongName()
    {
        $this->data['name'] = 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,
    phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed,
    mollitia lectus. Nulla vestibulum massa neque ut et.';
        $organization = $this->Organizations->newEntity($this->data);
        $errors = $organization->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with a short name value.');
        $actual = $errors['name']['validLength'];
        $expected = 'The name must be at least 2 characters and at most 128 characters long!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for a long name length.');
        $this->assertFalse($this->Organizations->save($organization), 'Organization was saved with a short Surname field.');
    }

    public function testValidationFailsWithoutName()
    {
        unset($this->data['name']);
        $participant = $this->Organizations->newEntity($this->data);
        $errors = $participant->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the type field');
        $this->assertFalse($this->Organizations->save($participant), 'Organization was saved without the type field.');
    }

    public function testValidationFailsWithEmptyName()
    {
        $this->data['name'] = '';
        $organization = $this->Organizations->newEntity($this->data);
        $errors = $organization->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the surname field');
        $actual = $errors['name']['_empty'];
        $expected = 'Please provide a name!';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown.');
        $this->assertFalse($this->Organizations->save($organization), 'Organization was saved with an empty name value.');
    }

}
