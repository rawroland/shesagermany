<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActivitiesFixture.
 */
class ActivitiesFixture extends TestFixture
{
/**
 * Fields.
 *
 * @var array
 */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'event_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'title' => ['type' => 'string', 'length' => 128, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'description' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'start_time' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'end_time' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'deleted' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
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
            'event_id' => 1,
            'title' => 'Be your own boss',
            'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'start_time' => '2015-02-25 22:45:20',
            'end_time' => '2015-02-25 22:45:20',
            'deleted' => 0,
            'created' => 1424904320,
            'modified' => 1424904320,
        ],
        [
            'id' => 2,
            'event_id' => 1,
            'title' => 'Ossucs Football tournament',
            'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'start_time' => '2015-02-25 22:45:20',
            'end_time' => '2015-02-25 22:45:20',
            'deleted' => 0,
            'created' => 1424904320,
            'modified' => 1424904320,
        ],
        [
            'id' => 3,
            'event_id' => 1,
            'title' => 'SG5 Gala Night',
            'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'start_time' => '2015-02-25 22:45:20',
            'end_time' => '2015-02-25 22:45:20',
            'deleted' => 0,
            'created' => 1424904320,
            'modified' => 1424904320,
        ],
        [
            'id' => 4,
            'event_id' => 4,
            'title' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'start_time' => '2015-02-25 22:45:20',
            'end_time' => '2015-02-25 22:45:20',
            'deleted' => 0,
            'created' => 1424904320,
            'modified' => 1424904320,
        ],
        [
            'id' => 5,
            'event_id' => 5,
            'title' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'start_time' => '2015-02-25 22:45:20',
            'end_time' => '2015-02-25 22:45:20',
            'deleted' => 0,
            'created' => 1424904320,
            'modified' => 1424904320,
        ],
        [
            'id' => 6,
            'event_id' => 6,
            'title' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'start_time' => '2015-02-25 22:45:20',
            'end_time' => '2015-02-25 22:45:20',
            'deleted' => 0,
            'created' => 1424904320,
            'modified' => 1424904320,
        ],
        [
            'id' => 7,
            'event_id' => 7,
            'title' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'start_time' => '2015-02-25 22:45:20',
            'end_time' => '2015-02-25 22:45:20',
            'deleted' => 0,
            'created' => 1424904320,
            'modified' => 1424904320,
        ],
        [
            'id' => 8,
            'event_id' => 8,
            'title' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'start_time' => '2015-02-25 22:45:20',
            'end_time' => '2015-02-25 22:45:20',
            'deleted' => 0,
            'created' => 1424904320,
            'modified' => 1424904320,
        ],
        [
            'id' => 9,
            'event_id' => 9,
            'title' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'start_time' => '2015-02-25 22:45:20',
            'end_time' => '2015-02-25 22:45:20',
            'deleted' => 0,
            'created' => 1424904320,
            'modified' => 1424904320,
        ],
        [
            'id' => 10,
            'event_id' => 10,
            'title' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'start_time' => '2015-02-25 22:45:20',
            'end_time' => '2015-02-25 22:45:20',
            'deleted' => 0,
            'created' => 1424904320,
            'modified' => 1424904320,
        ],
    ];
}
