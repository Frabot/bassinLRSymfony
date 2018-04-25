<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Musee
 *
 * @ORM\Table(name="musee")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MuseeRepository")
 */
class Musee
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private$adresse;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $horaireOuverture;

    /**
     * @var integer
     *
     * @ORM\Column(type="integer")
     */
    private $horaireFermeture;


    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Bateau", mappedBy="musee")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $bateaux;

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
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return int
     */
    public function getHoraireOuverture()
    {
        return $this->horaireOuverture;
    }

    /**
     * @param int $horaireOuverture
     */
    public function setHoraireOuverture($horaireOuverture)
    {
        $this->horaireOuverture = $horaireOuverture;
    }

    /**
     * @return int
     */
    public function getHoraireFermeture()
    {
        return $this->horaireFermeture;
    }

    /**
     * @param int $horaireFermeture
     */
    public function setHoraireFermeture($horaireFermeture)
    {
        $this->horaireFermeture = $horaireFermeture;
    }

    /**
     * @return mixed
     */
    public function getBateaux()
    {
        return $this->bateaux;
    }

    /**
     * @param mixed $bateaux
     */
    public function setBateaux($bateaux)
    {
        $this->bateaux = $bateaux;
    }


}