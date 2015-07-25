<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Class Organization.
 */
class Organization extends Entity
{
    public function getName()
    {
        return $this->name;
    }
}
