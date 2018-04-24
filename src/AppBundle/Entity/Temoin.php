<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Temoin
 *
 * @ORM\Table(name="temoin")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TemoinRepository")
 */
class Temoin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string")
     */
    private $prenom;

    /**
     * @return mixed
     */
    public function getBateau()
    {
        return $this->bateau;
    }

    /**
     * @param mixed $bateau
     */
    public function setBateau($bateau)
    {
        $this->bateau = $bateau;
    }

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Bateau")
     * @ORM\JoinColumn(nullable=false)
     */
    private $bateau;

    /**
     * @ORM\OneToMany(targetEntity="Temoignage", mappedBy="temoin")
     * @var Temoignages []
     */
    private $temoignages;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Temoin
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom.
     *
     * @param string $prenom
     *
     * @return Temoin
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom.
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Temoin constructor.
     */
    public function __construct()
    {
        $this->temoignages = new ArrayCollection();
    }


    /**
     * @return Temoignages[]
     */
    public function getTemoignages()
    {
        return $this->temoignages;
    }

    /**
     * @param Temoignages[] $temoignages
     */
    public function setTemoignages($temoignages)
    {
        $this->temoignages = $temoignages;
    }
}
