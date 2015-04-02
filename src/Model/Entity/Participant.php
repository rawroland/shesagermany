<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Class Participant.
 */
class Participant extends Entity
{
    /**
     * Participant types.
     */
    const TYPE_PERSON = 'person';
    const TYPE_ORGANIZATION = 'organization';

    /**
     * Participant roles.
     */
    const ROLE_MODERATOR = 'Moderator';
    const ROLE_PANELIST = 'Panelist';
    const ROLE_TEAM = 'Team';
}
