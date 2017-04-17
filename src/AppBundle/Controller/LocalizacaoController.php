<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class LocalizacaoController extends FOSRestController
{
    public function getLocalizacaoAction($id)
    {
        $localizacao = [];
        $view = $this->view($localizacao, 200)
            ->setTemplate("StaticBundle:Localizacao:getLocalizacao.html.twig")
            ->setTemplateVar('');

        return $this->handleView($view);
    }

    public function deleteLocalizacaoAction($id)
    {

    }

    public function updateLocalizacaoAction($id, $updated)
    {

    }

    public function createLocalizacaoAction($id, $new)
    {

    }
}