<?php

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AddressesFixture.
 */
class AddressesFixture extends TestFixture
{
/**
 * Fields.
 *
 * @var array
 */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'street' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'postal_code' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'town' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'state' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'country' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
'engine' => 'InnoDB', 'collation' => 'utf8_general_ci',
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records.
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'street' => 'Lorem ipsum dolor sit amet',
            'postal_code' => 'Lorem ip',
            'town' => 'Lorem ipsum dolor sit amet',
            'state' => 'Lorem ipsum dolor sit amet',
            'country' => 'Lorem ipsum dolor sit amet',
            'created' => '2015-04-03 13:17:55',
            'modified' => '2015-04-03 13:17:55',
        ],
        [
            'id' => 2,
            'street' => 'Lorem ipsum dolor sit amet',
            'postal_code' => 'Lorem ip',
            'town' => 'Lorem ipsum dolor sit amet',
            'state' => 'Lorem ipsum dolor sit amet',
            'country' => 'Lorem ipsum dolor sit amet',
            'created' => '2015-04-03 13:17:55',
            'modified' => '2015-04-03 13:17:55',
        ],
        [
            'id' => 3,
            'street' => 'Lorem ipsum dolor sit amet',
            'postal_code' => 'Lorem ip',
            'town' => 'Lorem ipsum dolor sit amet',
            'state' => 'Lorem ipsum dolor sit amet',
            'country' => 'Lorem ipsum dolor sit amet',
            'created' => '2015-04-03 13:17:55',
            'modified' => '2015-04-03 13:17:55',
        ],
        [
            'id' => 4,
            'street' => 'Lorem ipsum dolor sit amet',
            'postal_code' => 'Lorem ip',
            'town' => 'Lorem ipsum dolor sit amet',
            'state' => 'Lorem ipsum dolor sit amet',
            'country' => 'Lorem ipsum dolor sit amet',
            'created' => '2015-04-03 13:17:55',
            'modified' => '2015-04-03 13:17:55',
        ],
        [
            'id' => 5,
            'street' => 'Lorem ipsum dolor sit amet',
            'postal_code' => 'Lorem ip',
            'town' => 'Lorem ipsum dolor sit amet',
            'state' => 'Lorem ipsum dolor sit amet',
            'country' => 'Lorem ipsum dolor sit amet',
            'created' => '2015-04-03 13:17:55',
            'modified' => '2015-04-03 13:17:55',
        ],
        [
            'id' => 6,
            'street' => 'Lorem ipsum dolor sit amet',
            'postal_code' => 'Lorem ip',
            'town' => 'Lorem ipsum dolor sit amet',
            'state' => 'Lorem ipsum dolor sit amet',
            'country' => 'Lorem ipsum dolor sit amet',
            'created' => '2015-04-03 13:17:55',
            'modified' => '2015-04-03 13:17:55',
        ],
        [
            'id' => 7,
            'street' => 'Lorem ipsum dolor sit amet',
            'postal_code' => 'Lorem ip',
            'town' => 'Lorem ipsum dolor sit amet',
            'state' => 'Lorem ipsum dolor sit amet',
            'country' => 'Lorem ipsum dolor sit amet',
            'created' => '2015-04-03 13:17:55',
            'modified' => '2015-04-03 13:17:55',
        ],
        [
            'id' => 8,
            'street' => 'Lorem ipsum dolor sit amet',
            'postal_code' => 'Lorem ip',
            'town' => 'Lorem ipsum dolor sit amet',
            'state' => 'Lorem ipsum dolor sit amet',
            'country' => 'Lorem ipsum dolor sit amet',
            'created' => '2015-04-03 13:17:55',
            'modified' => '2015-04-03 13:17:55',
        ],
        [
            'id' => 9,
            'street' => 'Lorem ipsum dolor sit amet',
            'postal_code' => 'Lorem ip',
            'town' => 'Lorem ipsum dolor sit amet',
            'state' => 'Lorem ipsum dolor sit amet',
            'country' => 'Lorem ipsum dolor sit amet',
            'created' => '2015-04-03 13:17:55',
            'modified' => '2015-04-03 13:17:55',
        ],
        [
            'id' => 10,
            'street' => 'Lorem ipsum dolor sit amet',
            'postal_code' => 'Lorem ip',
            'town' => 'Lorem ipsum dolor sit amet',
            'state' => 'Lorem ipsum dolor sit amet',
            'country' => 'Lorem ipsum dolor sit amet',
            'created' => '2015-04-03 13:17:55',
            'modified' => '2015-04-03 13:17:55',
        ],
    ];
}
