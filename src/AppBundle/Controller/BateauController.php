<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Bateau;

class BateauController extends FOSRestController
{
    /**
     * @Rest\View(serializerGroups={"bateau"})
     * @Rest\Get("/bateaux")
     */

    // Fonction qui renvoie toutes les bateaux
    public function findAllBateaux()
    {
        $bateaux = $this->getDoctrine()->getRepository('AppBundle:Bateau')->findAll();
        if ($bateaux === null) {
            return new View("there are no users exist", Response::HTTP_NOT_FOUND);
        }
        return $bateaux;
    }

    /**
     * @Rest\View(serializerGroups={"bateau"})
     * @Rest\Get("/bateau/{id}")
     */

    // Info bateau
    public function findOneBateau(Request $request)
    {
        $bateau = $this->getDoctrine()
            ->getRepository('QueSaisJeBundle:Bateau')
            ->find($request->get('id'));

        return $bateau;
    }
}
