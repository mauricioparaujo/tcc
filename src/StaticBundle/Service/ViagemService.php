<?php

namespace StaticBundle\Service;

use Doctrine\ORM\EntityNotFoundException;
use StaticBundle\Data\Repository\ViagemRepository;

class ViagemService
{
    private $repository;

    public function __construct(ViagemRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getViagem(int $id)
    {
        $viagem = $this->repository->findOneById($id);

        if (!$viagem) {
            throw new EntityNotFoundException();
        }

        return $viagem;
    }

    public function createViagem(string $nome)
    {
        return $this->repository->createViagem($nome);
    }

    public function updateViagem(int $id, string $nome)
    {
        $viagem = $this->getViagem($id);
        return $this->repository->updateViagem($viagem, $nome);
    }

    public function deleteViagem(int $id)
    {
        $viagem = $this->getViagem($id);
        $this->repository->deleteViagem($viagem);
    }
}