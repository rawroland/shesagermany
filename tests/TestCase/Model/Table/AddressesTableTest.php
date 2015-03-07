<?php

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AddressesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

class AddressesTableTest extends TestCase
{
    public $fixtures = [
        'Addresses' => 'app.Addresses',
    ];

    /**
     * @var AddressesTable
     */
    public $Addresses = null;

    /**
     * @var array Test data
     */
    public $data = [
        'street' => 'Flachsmarkt 15',
        'postal_code' => '47051',
        'town' => 'Duisburg',
        'state' => 'Nordrhein-Westfalen',
        'country' => 'Germany',
        'created' => '2015-03-07 15:54:35',
        'modified' => '2015-03-07 15:54:35',
    ];

    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Addresses') ? [] : ['className' => 'App\Model\Table\AddressesTable'];
        $this->Addresses = TableRegistry::get('Addresses', $config);
    }

    public function tearDown()
    {
        parent::tearDown();
        unset($this->Addresses);
    }

    public function testValidationFailsWithEmptyData()
    {
        $activity = $this->Addresses->newEntity([]);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with empty data.');
        $this->assertFalse($this->Addresses->save($activity), 'Address was saved without data.');
    }

    public function testValidationFailsWithoutStreet()
    {
        unset($this->data['street']);
        $activity = $this->Addresses->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the street field');
        $this->assertFalse($this->Addresses->save($activity), 'Address was saved without the street field.');
    }

    public function testValidationFailsWithEmptyStreet()
    {
        $this->data['street'] = '';
        $activity = $this->Addresses->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with an empty street name.');
        $actual = $errors['street']['_empty'];
        $expected = 'Please provide the street name.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown.');
        $this->assertFalse($this->Addresses->save($activity), 'Address was saved with an empty title value.');
    }

    public function testValidationFailsWithoutPostalCode()
    {
        unset($this->data['postal_code']);
        $activity = $this->Addresses->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the postal code field');
        $this->assertFalse($this->Addresses->save($activity), 'Address was saved without the postal code field.');
    }

    public function testValidationFailsWithEmptyPostalCode()
    {
        $this->data['postal_code'] = '';
        $activity = $this->Addresses->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the postal code field');
        $actual = $errors['postal_code']['_empty'];
        $expected = 'Please provide a postal code.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown for an empty postal code value.');
        $this->assertFalse($this->Addresses->save($activity), 'Address was saved with an empty postal code value.');
    }

    public function testValidationFailsWithoutTown()
    {
        unset($this->data['town']);
        $activity = $this->Addresses->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the town field');
        $this->assertFalse($this->Addresses->save($activity), 'Address was saved without the town field.');
    }

    public function testValidationFailsWithEmptyTown()
    {
        $this->data['town'] = '';
        $activity = $this->Addresses->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with an empty town name.');
        $actual = $errors['town']['_empty'];
        $expected = 'Please provide the town name.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown.');
        $this->assertFalse($this->Addresses->save($activity), 'Address was saved with an empty title value.');
    }

    public function testValidationFailsWithoutState()
    {
        unset($this->data['state']);
        $activity = $this->Addresses->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the state field');
        $this->assertFalse($this->Addresses->save($activity), 'Address was saved without the state field.');
    }

    public function testValidationFailsWithEmptyState()
    {
        $this->data['state'] = '';
        $activity = $this->Addresses->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with an empty state name.');
        $actual = $errors['state']['_empty'];
        $expected = 'Please provide the state name.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown.');
        $this->assertFalse($this->Addresses->save($activity), 'Address was saved with an empty title value.');
    }

    public function testValidationFailsWithoutCountry()
    {
        unset($this->data['country']);
        $activity = $this->Addresses->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered without the country field');
        $this->assertFalse($this->Addresses->save($activity), 'Address was saved without the country field.');
    }

    public function testValidationFailsWithEmptyCountry()
    {
        $this->data['country'] = '';
        $activity = $this->Addresses->newEntity($this->data);
        $errors = $activity->errors();
        $this->assertTrue(!empty($errors), 'No errors were triggered with an empty country name.');
        $actual = $errors['country']['_empty'];
        $expected = 'Please provide the country name.';
        $this->assertEquals($expected, $actual, 'Wrong error message was shown.');
        $this->assertFalse($this->Addresses->save($activity), 'Address was saved with an empty title value.');
    }
}
