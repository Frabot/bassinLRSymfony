<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;



class BateauController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"bateau"})
     * @Rest\Get("/bateaux")
     */

    // Fonction qui renvoie tous les bateaux
    public function getAllBateaux()
    {
        $bateaux = $this->getDoctrine()->getRepository('AppBundle:Bateau')->findAll();
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
            ->getRepository('AppBundle:Bateau')
            ->find($request->get('id'));

        return $bateau;
    }

}
