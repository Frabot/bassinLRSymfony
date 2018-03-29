<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bateau
 *
 * @ORM\Table(name="bateau", uniqueConstraints={@ORM\UniqueConstraint(name="bateau_unique", columns={"titre"})})
 * @ORM\Entity()
 */
class Bateau
{

}

