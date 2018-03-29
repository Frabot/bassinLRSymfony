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

class MuseeController
{
    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED, serializerGroups={"musee"})
     * @Rest\Get("/musee")
     */
    public function getMuseeAction(Request $request)
    {
        $musee = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Musee');

        return $musee;
    }
}