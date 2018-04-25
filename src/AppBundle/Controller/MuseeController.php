<?php
/**
 * Created by PhpStorm.
 * User: Fanny
 * Date: 28/03/2018
 * Time: 16:13
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;


class MuseeController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"musee"})
     * @Rest\Get("/musees")
     */

    // Fonction qui renvoie toutes les DR
    public function findAllMusees()
    {
        $musees = $this->getDoctrine()
            ->getRepository("AppBundle:Musee")
            ->findAll();

        return $musees;
    }


}