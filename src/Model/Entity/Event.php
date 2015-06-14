<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Core\Configure;

/**
 * Class Event.
 */
class Event extends Entity
{
    /**
     * Retrieve the relevant image for an event.
     *
     * @param string $type The type of the image to be retrieved.
     * @return string The cake relevant image location.
     */
    public function getImage($type = "thumb")
    {
        $location = "events".DS.$this->id.DS."$type.jpg";
        if(!is_file(Configure::read('App.imageBaseUrl').$location)) {
            return "default-$type.png";
        }

        return $location;
    }
}
