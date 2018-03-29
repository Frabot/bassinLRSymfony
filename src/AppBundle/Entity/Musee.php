<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Musee
 *
 * @ORM\Table(name="musee")
 * @ORM\Entity()
 */
class Musee
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $nom;

    /**
     * @ORM\Column(type="string")
     */
    protected $adresse;

    /**
     * @ORM\Column(type="string")
     */
    protected $accessibilite;


    /**
     * @ORM\OneToMany(targetEntity="Bateau", mappedBy="musee")
     * @var Bateaux []
     */
    protected $bateaux;
}