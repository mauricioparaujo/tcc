<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\View as ViewAnnotation;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


/**
 * @RouteResource("motorista", pluralize=false)
 */
class MotoristaController extends FOSRestController
{
    /**
     * Retorna um motorista
     *
     * rota: "get_motorista" [GET] /motorista/{id}
     */
    public function getAction($id)
    {
        return new JsonResponse($id, Response::HTTP_OK);
    }

    /**
     * Deleta um motorista
     *
     * rota: [DELETE] /motorista/{id}
     *
     * @ViewAnnotation(statusCode=204)
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