<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\RouteResource;

/**
 * @RouteResource("Motorista", pluralize=false)
 */
class MotoristaController extends FOSRestController
{
    /**
     * Retorna um motorista
     *
     * rota: [GET] /motorista/id
     *
     * @View()
     */
    public function getMotoristaAction($id)
    {
        $motorista = [];
        return $motorista;
    }

    /**
     * Deleta um motorista
     *
     * rota: [DELETE] /motorista/{id}
     *
     * @View(statusCode=204)
     */
    public function deleteMotoristaAction($id)
    {
        //return void
    }

    /**
     * Atualiza um motorista
     *
     * rota: [PUT] /motorista/{id}
     */
    public function putMotoristaAction($id)
    {
        //return void
    }

    /**
     * Cria um novo motorista
     *
     * rota: [POST] /motorista
     */
    public function postMotoristaAction()
    {
        //return void
    }

    /**
     * Cria uma nova viagem para um motorista
     *
     * rota: [POST] /motorista/{id}/viagem
     */
    public function postMotoristaViagemAction($id)
    {

    }
}