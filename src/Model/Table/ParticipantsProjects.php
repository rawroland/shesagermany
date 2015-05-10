<?php

/**
 * User: Roland Awemo
 * Date: 18.04.15
 * Time: 17:13.
 */
namespace App\Model\Table;

use Cake\ORM\Table;

class ParticipantsProjects extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->belongsTo('Activities');
        $this->belongsTo('Projects');
    }
}
