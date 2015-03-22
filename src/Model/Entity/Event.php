<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Class Event.
 */
class Event extends Entity
{
    /**
     * @todo Functionality for getting cover photo and return default thumb if not found
     */
    public function getCoverImage()
    {
        return 'default-thumb.png';
    }
}
