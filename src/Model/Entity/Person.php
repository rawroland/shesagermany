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
    const TITLE_MR = 'Mr';
    const TITLE_MRS = 'Mrs';
}