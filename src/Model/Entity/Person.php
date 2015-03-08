<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Class Person.
 */
class Person extends Entity
{
    /**
     * Titles.
     */
    const TITLE_DR = 'Dr.';
    const TITLE_DR_MED = 'Dr. Med.';
    const TITLE_DR_ING = 'Dr.-Ing.';
    const TITLE_MR = 'Mr.';
    const TITLE_MRS = 'Mrs';
    const TITLE_MS = 'Ms';
}
