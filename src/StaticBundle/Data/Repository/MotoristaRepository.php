<?php

namespace StaticBundle\Data\Repository;

use \Doctrine\ORM\EntityRepository;
use StaticBundle\Data\Entity\Motorista;

class MotoristaRepository extends EntityRepository
{
    public function delete(Motorista $motorista)
    {
        $this->getEntityManager()->remove($motorista);
        $this->getEntityManager()->flush();
    }

    public function update(Motorista $motorista)
    {
        $this->getEntityManager()->flush();

        return $motorista;
    }

    public function create(Motorista $motorista)
    {
        $this->getEntityManager()->persist($motorista);
        $this->getEntityManager()->flush();

        return $motorista;
    }
}
