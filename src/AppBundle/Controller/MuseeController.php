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
    // Fonction qui renvoie les info du musee
    /**
     * @Rest\View(serializerGroups={"musee"})
     * @Rest\Get("/musee/{id}")
     */

    // Fonction qui renvoie toutes les info du musee
    public function getInfoMusee(Request $request)
    {
        $musee = $this->getDoctrine()
            ->getRepository("AppBundle:Musee")
            ->find($request->get('id'));

        return $musee;
    }

}