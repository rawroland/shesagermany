<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActivitiesFixture
 *
 */
class ActivitiesFixture extends TestFixture
{

/**
 * Fields
 *
 * @var array
 */
    // @codingStandardsIgnoreStart
    public $fields = [
      'id' => [
        'type' => 'integer',
        'length' => 11,
        'unsigned' => false,
        'null' => false,
        'default' => null,
        'comment' => '',
        'autoIncrement' => true,
        'precision' => null,
      ],
      'title' => [
        'type' => 'string',
        'length' => 128,
        'null' => false,
        'default' => null,
        'comment' => '',
        'precision' => null,
        'fixed' => null,
      ],
      'description' => [
        'type' => 'text',
        'length' => null,
        'null' => false,
        'default' => null,
        'comment' => '',
        'precision' => null,
      ],
      'date_time' => [
        'type' => 'datetime',
        'length' => null,
        'null' => false,
        'default' => null,
        'comment' => '',
        'precision' => null,
      ],
      'event_id' => [
        'type' => 'integer',
        'length' => 11,
        'unsigned' => false,
        'null' => false,
        'default' => null,
        'comment' => '',
        'precision' => null,
        'autoIncrement' => null,
      ],
      'created' => [
        'type' => 'timestamp',
        'length' => null,
        'null' => true,
        'default' => null,
        'comment' => '',
        'precision' => null,
      ],
      'modified' => [
        'type' => 'timestamp',
        'length' => null,
        'null' => true,
        'default' => null,
        'comment' => '',
        'precision' => null,
      ],
      '_constraints' => [
        'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
      ],
      '_options' => [
        'engine' => 'InnoDB',
        'collation' => 'utf8_general_ci',
      ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
      [
        'id' => 1,
        'title' => 'Lorem ipsum dolor sit amet',
        'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
        'date_time' => '2015-02-11 19:46:16',
        'event_id' => 1,
        'created' => 1423683977,
        'modified' => 1423683977,
      ],
      [
        'id' => 2,
        'title' => 'Lorem ipsum dolor sit amet',
        'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
        'date_time' => '2015-02-11 19:46:17',
        'event_id' => 2,
        'created' => 1423683977,
        'modified' => 1423683977,
      ],
      [
        'id' => 3,
        'title' => 'Lorem ipsum dolor sit amet',
        'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
        'date_time' => '2015-02-11 19:46:17',
        'event_id' => 3,
        'created' => 1423683977,
        'modified' => 1423683977,
      ],
      [
        'id' => 4,
        'title' => 'Lorem ipsum dolor sit amet',
        'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
        'date_time' => '2015-02-11 19:46:17',
        'event_id' => 4,
        'created' => 1423683977,
        'modified' => 1423683977,
      ],
      [
        'id' => 5,
        'title' => 'Lorem ipsum dolor sit amet',
        'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
        'date_time' => '2015-02-11 19:46:17',
        'event_id' => 5,
        'created' => 1423683977,
        'modified' => 1423683977,
      ],
      [
        'id' => 6,
        'title' => 'Lorem ipsum dolor sit amet',
        'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
        'date_time' => '2015-02-11 19:46:17',
        'event_id' => 6,
        'created' => 1423683977,
        'modified' => 1423683977,
      ],
      [
        'id' => 7,
        'title' => 'Lorem ipsum dolor sit amet',
        'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
        'date_time' => '2015-02-11 19:46:17',
        'event_id' => 7,
        'created' => 1423683977,
        'modified' => 1423683977,
      ],
      [
        'id' => 8,
        'title' => 'Lorem ipsum dolor sit amet',
        'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
        'date_time' => '2015-02-11 19:46:17',
        'event_id' => 8,
        'created' => 1423683977,
        'modified' => 1423683977,
      ],
      [
        'id' => 9,
        'title' => 'Lorem ipsum dolor sit amet',
        'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
        'date_time' => '2015-02-11 19:46:17',
        'event_id' => 9,
        'created' => 1423683977,
        'modified' => 1423683977,
      ],
      [
        'id' => 10,
        'title' => 'Lorem ipsum dolor sit amet',
        'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
        'date_time' => '2015-02-11 19:46:17',
        'event_id' => 10,
        'created' => 1423683977,
        'modified' => 1423683977,
      ],
    ];
}