<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class ViagemController extends FOSRestController
{
    public function getViagemAction($id)
    {
        $viagem = [];
        $view = $this->view($viagem, 200)
            ->setTemplate("StaticBundle:Viagem:getViagem.html.twig")
            ->setTemplateVar('');

        return $this->handleView($view);
    }

    public function deleteViagemAction($id)
    {

    }

    public function updateViagemAction($id, $updated)
    {

    }

    public function createViagemAction($id, $new)
    {

    }
}