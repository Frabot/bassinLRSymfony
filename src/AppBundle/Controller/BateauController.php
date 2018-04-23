<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BateauController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"bateau"})
     * @Rest\Get("/bateau")
     */
    public function getBateaux(Request $request)
    {
        $musee = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Bateau');

        return $musee;
    }

    /**
     * @Rest\View(serializerGroups={"bateau})
     * @Rest\Get("/bateau/{id}")
     */
    public function getOneBateau(Request $request)
    {
        $musee = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Bateau');

        return $musee;
    }
}
