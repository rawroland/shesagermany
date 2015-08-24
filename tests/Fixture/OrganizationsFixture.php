<?php

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrganizationsFixture.
 */
class OrganizationsFixture extends TestFixture
{
    /**
     * Fields.
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'participant_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'timestamp', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
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
            'name' => 'Lorem ipsum dolor sit amet',
            'participant_id' => 1,
            'created' => 1424016417,
            'modified' => 1424016417,
        ],
        [
            'id' => 2,
            'name' => 'Lorem ipsum dolor sit amet',
            'participant_id' => 2,
            'created' => 1424016417,
            'modified' => 1424016417,
        ],
        [
            'id' => 3,
            'name' => 'Lorem ipsum dolor sit amet',
            'participant_id' => 3,
            'created' => 1424016417,
            'modified' => 1424016417,
        ],
        [
            'id' => 4,
            'name' => 'Lorem ipsum dolor sit amet',
            'participant_id' => 4,
            'created' => 1424016417,
            'modified' => 1424016417,
        ],
        [
            'id' => 5,
            'name' => 'Lorem ipsum dolor sit amet',
            'participant_id' => 5,
            'created' => 1424016417,
            'modified' => 1424016417,
        ],
        [
            'id' => 6,
            'name' => 'Lorem ipsum dolor sit amet',
            'participant_id' => 6,
            'created' => 1424016417,
            'modified' => 1424016417,
        ],
        [
            'id' => 7,
            'name' => 'Lorem ipsum dolor sit amet',
            'participant_id' => 7,
            'created' => 1424016417,
            'modified' => 1424016417,
        ],
        [
            'id' => 8,
            'name' => 'Lorem ipsum dolor sit amet',
            'participant_id' => 8,
            'created' => 1424016417,
            'modified' => 1424016417,
        ],
        [
            'id' => 9,
            'name' => 'Lorem ipsum dolor sit amet',
            'participant_id' => 9,
            'created' => 1424016417,
            'modified' => 1424016417,
        ],
        [
            'id' => 10,
            'name' => 'Lorem ipsum dolor sit amet',
            'participant_id' => 10,
            'created' => 1424016417,
            'modified' => 1424016417,
        ],
    ];
}
