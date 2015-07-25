<?php

namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * Class ExecutiveTable.
 */
class ExecutivesTable extends Table
{
    /**
     * @param array $config
     */
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->table('executives');
        $this->displayField('position');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Person');
    }
}
