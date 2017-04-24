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

    public function get(int $id)
    {
        $viagem = $this->repository->findOneById($id);

        if (!$viagem) {
            throw new EntityNotFoundException();
        }

        return $viagem;
    }

    public function create(string $nome)
    {
        return $this->repository->createViagem($nome);
    }

    public function update(int $id, string $nome)
    {
        $viagem = $this->get($id);
        return $this->repository->update($viagem, $nome);
    }

    public function deleteViagem(int $id)
    {
        $viagem = $this->get($id);
        $this->repository->delete($viagem);
    }
}