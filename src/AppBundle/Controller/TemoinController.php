<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TemoinController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"temoin"})
     * @Rest\Get("/temoins")
     */

    // Fonction qui renvoie toutes les bateaux
    public function findAllTemoins()
    {
        $bateaux = $this->getDoctrine()->getRepository('AppBundle:Bateau')->findAll();
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
