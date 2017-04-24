<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use StaticBundle\Data\Entity\Foto;
use StaticBundle\Data\Entity\Viagem;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use DateTime;

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
    public function postAction(Request $request, int $motoristaId)
    {
        $inicio = $request->get('inicio');
        $foto = $request->get('foto');
        $motorista = $this->get('service.motorista')->get($motoristaId);

        $viagem = new Viagem(new DateTime($inicio), new Foto(), $motorista);

        $this->get('service.viagem')->create($viagem);
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