<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Class Participant
 * @package App\Model\Entity
 */
class Participant extends Entity{

    /**
     * Participant types
     */
    const TYPE_PERSON = 'person';
    const TYPE_ORGANIZATION = 'organization';

    /**
     * Participant roles
     */
    const ROLE_SPEAKER = 'Speaker';
    const ROLE_TEAM = 'Team';

} 