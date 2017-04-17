<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\View;

class LocalizacaoController extends FOSRestController
{
    /**
     * @View()
     */
    public function getLocalizacaoAction($id)
    {
        $localizacao = [];
        return $localizacao;
    }

    /**
     * @View(statusCode=204)
     */
    public function deleteLocalizacaoAction($id)
    {
        //return void
    }

    /**
     * @View(statusCode=204)
     */
    public function updateLocalizacaoAction($id)
    {
        //return void
    }
}