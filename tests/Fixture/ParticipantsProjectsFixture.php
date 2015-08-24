<?php

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ParticipantsProjectsFixture.
 */
class ParticipantsProjectsFixture extends TestFixture
{
    /**
     * Fields.
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'participant_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'project_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
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
            'participant_id' => 1,
            'project_id' => 1,
        ],
        [
            'id' => 2,
            'participant_id' => 2,
            'project_id' => 2,
        ],
        [
            'id' => 3,
            'participant_id' => 3,
            'project_id' => 3,
        ],
        [
            'id' => 4,
            'participant_id' => 4,
            'project_id' => 4,
        ],
        [
            'id' => 5,
            'participant_id' => 5,
            'project_id' => 5,
        ],
        [
            'id' => 6,
            'participant_id' => 6,
            'project_id' => 6,
        ],
        [
            'id' => 7,
            'participant_id' => 7,
            'project_id' => 7,
        ],
        [
            'id' => 8,
            'participant_id' => 8,
            'project_id' => 8,
        ],
        [
            'id' => 9,
            'participant_id' => 9,
            'project_id' => 9,
        ],
        [
            'id' => 10,
            'participant_id' => 10,
            'project_id' => 10,
        ],
    ];
}
