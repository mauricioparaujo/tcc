<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;


/**
 * @RouteResource("motorista", pluralize=false)
 */
class MotoristaController extends FOSRestController
{
    /**
     * Retorna um motorista
     *
     * rota:
     * * "get_motorista"
     * * [GET] /motorista/{id}
     */
    public function getAction($id)
    {
        $service = $this->get('service.motorista');
        $motorista = $service->getMotorista($id);
        return new JsonResponse($motorista->getName(), Response::HTTP_OK);
    }

    /**
     * Cria um motorista
     *
     * rota:
     * * "post_motorista"
     * * [POST] /motorista/{id}
     */
    public function postAction($id)
    {
        return new JsonResponse($id, Response::HTTP_OK);
    }

    /**
     * Deleta um motorista
     *
     * rota:
     * * "delete_motorista"
     * * [DELETE] /motorista/{id}
     */
    public function deleteAction($id)
    {
        //return void
    }

    /**
     * Atualiza motorista
     *
     * rota:
     * * "put_motorista"
     * * [PUT] /motorista/{id}
     */
    public function putAction($id)
    {
        //return void
    }
}