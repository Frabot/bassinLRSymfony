<?php
/**
 * Created by PhpStorm.
 * User: Fanny
 * Date: 28/03/2018
 * Time: 16:13
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;

class MuseeController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"musee"})
     * @Rest\Get("/musee")
     */

    // Fonction qui renvoie toutes les DR
    public function findMusee()
    {
        $musee = $this->getDoctrine()
            ->getRepository('AppBundle:Musee')
            ->findAll();

        return $musee;
    }


}