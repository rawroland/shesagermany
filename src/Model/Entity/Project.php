<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Class Project.
 */
class Project extends Entity
{
    /**
     * @todo Functionality for getting cover photo and return default thumb if not found
     */
    public function getCoverImage()
    {
        return 'default-thumb.png';
    }

    /**
     * @todo Functionality for getting cover photo and return default thumb if not found
     */
    public function getFeatureImage()
    {
        return 'default-feature.png';
    }
}
