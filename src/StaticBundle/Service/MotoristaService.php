<?php

namespace StaticBundle\Service;

use Doctrine\ORM\EntityNotFoundException;
use StaticBundle\Data\Repository\MotoristaRepository;

class MotoristaService
{
    private $repository;

    public function __construct(MotoristaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getMotorista(int $id)
    {
        $motorista = $this->repository->findOneById($id);

        if (!$motorista) {
            throw new EntityNotFoundException();
        }

        return $motorista;
    }

    public function createMotorista(string $nome)
    {
        return $this->repository->createMotorista($nome);
    }

    public function updateMotorista(int $id, string $nome)
    {
        $motorista = $this->getMotorista($id);
        return $this->repository->updateMotorista($motorista, $nome);
    }

    public function deleteMotorista(int $id)
    {
        $motorista = $this->getMotorista($id);
        $this->repository->deleteMotorista($motorista);
    }
}