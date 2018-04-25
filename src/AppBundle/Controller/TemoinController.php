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

    // Fonction qui renvoie toutes les bateaux
    public function findAllTemoins()
    {
        $bateaux = $this->getDoctrine()->getRepository('AppBundle:Temoin')->findAll();
        if ($bateaux === null) {
            return new View("there are no users exist", Response::HTTP_NOT_FOUND);
        }
        return $bateaux;
    }

    /**
     * @Rest\View(serializerGroups={"temoin"})
     * @Rest\Get("/temoin/{id}")
     */

    // Info bateau
    public function findOneTemoin(Request $request)
    {
        $temoin = $this->getDoctrine()
            ->getRepository('QueSaisJeBundle:Temoin')
            ->find($request->get('id'));

        return $temoin;
    }
}
