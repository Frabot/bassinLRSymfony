<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temoignage
 *
 * @ORM\Table(name="temoignage")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TemoignageRepository")
 */
class Temoignage
{

    /**
     *  @var int
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     *  @var string
     *
     * @ORM\Column(type="string",nullable=false)
     */
    private $titre;



    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */

    private $photo_temoignage;

    /**
     * @var string
     *
     * @ORM\Column(type="text", nullable=false)
     */

    private $commentaire;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Temoin", inversedBy="temoignages")
     * @ORM\JoinColumn(nullable=false, referencedColumnName="id")
     */
    private $temoin;

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
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getPhotoTemoignage()
    {
        return $this->photo_temoignage;
    }

    /**
     * @param string $photo_temoignage
     */
    public function setPhotoTemoignage($photo_temoignage)
    {
        $this->photo_temoignage = $photo_temoignage;
    }

    /**
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param string $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }

    /**
     * @return mixed
     */
    public function getTemoin()
    {
        return $this->temoin;
    }

    /**
     * @param mixed $temoin
     */
    public function setTemoin($temoin)
    {
        $this->temoin = $temoin;
    }
}