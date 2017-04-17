<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\View;

class ViagemController extends FOSRestController
{
    /**
     * @View()
     */
    public function getViagemAction($id)
    {
        $viagem = [];
        return $viagem;
    }

    /**
     * @View(statusCode=204)
     */
    public function deleteViagemAction($id)
    {
        //return void
    }

    /**
     * @View(statusCode=204)
     */
    public function updateViagemAction($id, $updated)
    {
        //return void
    }

    /**
     * @View(statusCode=201)
     */
    public function neweViagemLocalizacaoAction($id, $new)
    {
        //return void
    }
}