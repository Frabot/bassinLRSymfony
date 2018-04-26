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
     * @ORM\Column(type="string", nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $photo_temoin;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Bateau", inversedBy="temoins")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $bateau;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Temoignage", mappedBy="temoin")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $temoignages;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @param string $profession
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
    }

    /**
     * @return string
     */
    public function getPhotoTemoin()
    {
        return $this->photo_temoin;
    }

    /**
     * @param string $photo_temoin
     */
    public function setPhotoTemoin($photo_temoin)
    {
        $this->photo_temoin = $photo_temoin;
    }

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
     * @return mixed
     */
    public function getTemoignages()
    {
        return $this->temoignages;
    }

    /**
     * @param mixed $temoignages
     */
    public function setTemoignages($temoignages)
    {
        $this->temoignages = $temoignages;
    }

}
