<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * @RouteResource("viagem", pluralize=false)
 */
class ViagemController extends FOSRestController
{
    /**
     * Retorna uma viagem de um motorista
     *
     * rota:
     * * "get_motorista_viagem"
     * * [GET] /motorista/{motoristaId}/viagem/{id}
     */
    public function getAction($motoristaId, $id)
    {
        return new JsonResponse($id, Response::HTTP_OK);
    }

    /**
     * Retorna uma viagem de um motorista
     *
     * rota:
     * * "post_motorista_viagem"
     * * [POST] /motorista/{motoristaId}/viagem
     */
    public function postAction($motoristaId)
    {
        return new JsonResponse($motoristaId, Response::HTTP_OK);
    }

    /**
     * Deleta uma viagem de um motorista
     *
     * rota:
     * * "delete_motorista_viagem"
     * * [DELETE] /motorista/{motoristaId}/viagem/{id}
     */
    public function deleteAction($motoristaId, $id)
    {
        //return void
    }

    /**
     * Atualiza uma viagem de um motorista
     *
     * rota:
     * * "put_motorista_viagem"
     * * [PUT] /motorista/{motoristaId}/viagem/{id}
     */
    public function putAction($motoristaId, $id)
    {
        //return void
    }
}