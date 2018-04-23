<?php
/**
 * Created by PhpStorm.
 * User: Fanny
 * Date: 28/03/2018
 * Time: 16:13
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Musee;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;

class MuseeController
{
    /**
     * @Rest\View(serializerGroups={"musee"})
     * @Rest\Get("/musee")
     */
    public function getMuseeAction(Request $request)
    {
        $musee = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Musee');

        return $musee;
    }

    /**
     * @Rest\View(serializerGroups={"musee"})
     * @Rest\Get("/musee/id/bateau")
     */
    public function getMusee(Request $request)
    {
        $musee = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Musee');

        return $musee;
    }
}