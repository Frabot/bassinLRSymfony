<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temoignage
 *
 * @ORM\Table(name="temoignage")
 * @ORM\Entity()
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
     * @ORM\Column(name="nomauteur",type="string")
     */
    private $nom_auteur;

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
     *  @var string
     *
     * @ORM\Column(name="titre",type="string")
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */

    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="datetime")
     */

    private $commentaire;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Bateau")
     * @ORM\JoinColumn(nullable=false)
     */
    private $bateau;

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
    public function getNomAuteur()
    {
        return $this->nom_auteur;
    }

    /**
     * @param string $nom_auteur
     */
    public function setNomAuteur($nom_auteur)
    {
        $this->nom_auteur = $nom_auteur;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
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



}