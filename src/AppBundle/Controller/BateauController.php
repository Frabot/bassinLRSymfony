<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations as Rest;

class BateauController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"bateau"})
     * @Rest\Get("/bateaux")
     */

    // Fonction qui renvoie toutes les DR
    public function findAllBateaux()
    {
        $bateaux = $this->getDoctrine()
            ->getRepository('AppBundle:Bateau')
            ->findAll();

        return $bateaux;
    }
}
