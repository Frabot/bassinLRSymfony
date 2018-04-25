<?php
/**
 * Created by PhpStorm.
 * User: Fanny
 * Date: 28/03/2018
 * Time: 16:13
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Musee;

class MuseeController extends FOSRestController
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