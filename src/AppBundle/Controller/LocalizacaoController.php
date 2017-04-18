<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * @RouteResource("localizacao", pluralize=false)
 */
class LocalizacaoController extends FOSRestController
{
    /**
     * Retorna uma localização de uma viagem de um motorista
     *
     * rota:
     * * "get_motorista_viagem_localizacao"
     * * [GET] /motorista/{motoristaId}/viagem/{viagemId}/localizacao/{id}
     */
    public function getAction($motoristaId, $localizacao, $id)
    {
        return new JsonResponse($id, Response::HTTP_OK);
    }

    /**
     * Retorna uma localização de uma viagem de um motorista
     *
     * rota:
     * * "post_motorista_viagem_localizacao"
     * * [POST] /motorista/{motoristaId}/viagem/{viagemId}/localizacao/{id}
     */
    public function postAction($motoristaId, $localizacao, $id)
    {
        return new JsonResponse($id, Response::HTTP_OK);
    }

    /**
     * Deleta uma localização de uma viagem de um motorista
     *
     * rota:
     * * "delete_motorista_viagem_localizacao"
     * * [DELETE] /motorista/{motoristaId}/viagem/{viagemId}/localizacao/{id}
     */
    public function deleteAction($motoristaId, $localizacao, $id)
    {
        //return void
    }

    /**
     * Atualiza uma localização de uma viagem de um motorista
     *
     * rota:
     * * "put_motorista_viagem_localizacao"
     * * [PUT] /motorista/{motoristaId}/viagem/{viagemId}/localizacao/{id}
     */
    public function putAction($motoristaId, $localizacao, $id)
    {
        //return void
    }
}