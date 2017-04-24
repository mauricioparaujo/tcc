<?php

namespace StaticBundle\Data\Repository;

use Doctrine\ORM\EntityRepository;
use StaticBundle\Data\Entity\Viagem;

class ViagemRepository extends EntityRepository
{
    public function delete(Viagem $viagem)
    {
        $this->getEntityManager()->remove($viagem);
        $this->getEntityManager()->flush();
    }

    public function update(Viagem $viagem)
    {
        $this->getEntityManager()->flush();

        return $viagem;
    }

    public function create(Viagem $viagem)
    {
        $this->getEntityManager()->persist($viagem);
        $this->getEntityManager()->flush();

        return $viagem;
    }
}