<?php

namespace StaticBundle\Service;

use StaticBundle\Data\Repository\MotoristaRepository;
use StaticBundle\Mapper\MapperInterface;

class MotoristaService extends AbstractService
{
    public function __construct(MotoristaRepository $repository, MapperInterface $mapper)
    {
        parent::__construct($repository, $mapper);
    }

    public function getMotorista($id)
    {
        $motorista = $this->repository->findById($id);
        return $this->mapSingleEntity($motorista);
    }
}