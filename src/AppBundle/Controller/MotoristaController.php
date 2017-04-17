<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\View;

class MotoristaController extends FOSRestController
{
    /**
     * @View()
     */
    public function getMotoristaAction($id)
    {
        $motorista = [];
        return $motorista;
    }

    /**
     * @View(statusCode=204)
     */
    public function deleteMotoristaAction($id)
    {
        //return void
    }

    /**
     * @View(statusCode=204)
     */
    public function updateMotoristaAction($id, $updated)
    {
        //return void
    }

    /**
     * @View(statusCode=201)
     */
    public function createMotoristaAction($id, $new)
    {
        //return void
    }
}