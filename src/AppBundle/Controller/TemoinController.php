<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Temoin;

class TemoinController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"temoin"})
     * @Rest\Get("/temoins")
     */

    // Fonction qui renvoie tous les temoins
    public function findAllTemoins()
    {
        $temoins = $this->getDoctrine()
            ->getRepository('AppBundle:Temoin')
            ->findAll();

        return $temoins;
    }

    /**
     * @Rest\View(serializerGroups={"temoin"})
     * @Rest\Get("/temoin/{id}")
     */

    // Info temoin
    public function findOneTemoin(Request $request)
    {
        $temoin = $this->getDoctrine()
            ->getRepository('AppBundle:Temoin')
            ->find($request->get('id'));

        return $temoin;
    }


    /**
     * @Rest\View(serializerGroups={"temoignage"})
     * @Rest\Get("/temoignages")
     */

    // Service pour trouver toutes les images
    public function getAllTemoignages(Request $request)
    {
        $temoignage = $this->getDoctrine()
            ->getRepository('AppBundle:Temoignage')
            ->findAll();

        return $temoignage;
    }
}
