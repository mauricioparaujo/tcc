<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class MotoristaController extends FOSRestController
{
    public function getMotoristaAction($id)
    {
        $motorista = [];
        $view = $this->view($motorista, 200)
            ->setTemplate("StaticBundle:Motorista:getMotorista.html.twig")
            ->setTemplateVar('');

        return $this->handleView($view);
    }

    public function deleteMotoristaAction($id)
    {

    }

    public function updateMotoristaAction($id, $updated)
    {

    }

    public function createMotoristaAction($id, $new)
    {

    }
}