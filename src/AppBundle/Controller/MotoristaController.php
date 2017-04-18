<?php

namespace AppBundle\Controller;

use Doctrine\ORM\EntityNotFoundException;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\Annotations\View;
use StaticBundle\Data\Entity\Motorista;
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
     * rota:
     * * "get_motorista"
     * * [GET] /motorista/{id}
     */
    public function getAction(int $id)
    {
        $motorista = $this->findMotorista($id);
        return new Response($this->serialize($motorista), Response::HTTP_OK);
    }

    /**
     * Cria um motorista
     *
     * rota:
     * * "post_motorista"
     * * [POST] /motorista
     */
    public function postAction(Request $request)
    {
        $nome = $request->get('nome');

        $motorista = $this->get('service.motorista')->createMotorista($nome);
        return new Response($this->serialize($motorista), Response::HTTP_CREATED);
    }

    /**
     * Deleta um motorista
     *
     * rota:
     * * "delete_motorista"
     * * [DELETE] /motorista/{id}
     */
    public function deleteAction(int $id)
    {
        $this->get('service.motorista')->deleteMotorista($id);
        return new Response('', Response::HTTP_NO_CONTENT);
    }

    /**
     * Atualiza motorista
     *
     * rota:
     * * "put_motorista"
     * * [PUT] /motorista/{id}
     */
    public function putAction(Request $request, int $id)
    {
        $nome = $request->get('nome');
        $motorista = $this->get('service.motorista')->updateMotorista($id, $nome);
        return new Response($this->serialize($motorista), Response::HTTP_ACCEPTED);
    }

    private function findMotorista(int $id)
    {
        try {
            $motorista = $this->get('service.motorista')->getMotorista($id);
        } catch (EntityNotFoundException $e) {
            throw $this->createNotFoundException('Motorista nao encontrado');
        }

        return $motorista;
    }

    private function serialize(Motorista $motorista)
    {
        $serializer = $this->get('jms_serializer');
        return $serializer->serialize($motorista, 'json');
    }
}