<?php

namespace StaticBundle\Data\Repository;

use \Doctrine\ORM\EntityRepository;
use StaticBundle\Data\Entity\Motorista;

class MotoristaRepository extends EntityRepository
{
    public function deleteMotorista(Motorista $motorista)
    {
        $this->getEntityManager()->remove($motorista);
        $this->getEntityManager()->flush();
    }

    public function updateMotorista(Motorista $motorista, string $nome)
    {
        $motorista->setNome($nome);

        $this->getEntityManager()->flush();

        return $motorista;
    }

    public function createMotorista(string $nome)
    {
        $motorista = new Motorista();

        $motorista->setNome($nome);

        $this->getEntityManager()->persist($motorista);
        $this->getEntityManager()->flush();

        return $motorista;
    }
}
