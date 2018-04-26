<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bateau
 *
 * @ORM\Table(name="bateau", uniqueConstraints={@ORM\UniqueConstraint(name="bateau_unique", columns={"nom"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BateauRepository")
 */
class Bateau
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     *  @var string
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $nom;

    /**
     *  @var string
     *
     * @ORM\Column(type="string", nullable=false)
     */
    private $anneecreation;

    /**
     *  @var string
     *
     * @ORM\Column(type="text", nullable=false)
     */
    private $histoire;

    /**
     *  @var string
     *
     * @ORM\Column(type="string")
     */
    private $image;

    /**
     *  @var int
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    private $lat;

    /**
     *  @var int
     *
     * @ORM\Column(type="integer", nullable=false)
     */
    private $lng;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Temoin", mappedBy="bateau")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $temoins;

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
    public function getAnneecreation()
    {
        return $this->anneecreation;
    }

    /**
     * @param string $anneecreation
     */
    public function setAnneecreation($anneecreation)
    {
        $this->anneecreation = $anneecreation;
    }

    /**
     * @return string
     */
    public function getHistoire()
    {
        return $this->histoire;
    }

    /**
     * @param string $histoire
     */
    public function setHistoire($histoire)
    {
        $this->histoire = $histoire;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param int $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return int
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * @param int $lng
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    }

    /**
     * @return mixed
     */
    public function getTemoins()
    {
        return $this->temoins;
    }

    /**
     * @param mixed $temoins
     */
    public function setTemoins($temoins)
    {
        $this->temoins = $temoins;
    }


}

