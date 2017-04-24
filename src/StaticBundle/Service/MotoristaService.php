<?php

namespace StaticBundle\Service;

use Doctrine\ORM\EntityNotFoundException;
use StaticBundle\Data\Entity\Motorista;
use StaticBundle\Data\Repository\MotoristaRepository;

class MotoristaService
{
    private $repository;

    public function __construct(MotoristaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function get(int $id)
    {
        $motorista = $this->repository->findOneById($id);

        if (!$motorista) {
            throw new EntityNotFoundException();
        }

        return $motorista;
    }

    public function create(Motorista $motorista)
    {
        return $this->repository->create($motorista);
    }

    public function update(Motorista $motorista)
    {
        return $this->repository->update($motorista);
    }

    public function delete(int $id)
    {
        $motorista = $this->get($id);
        $this->repository->delete($motorista);
    }
}