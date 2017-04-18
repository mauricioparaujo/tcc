<?php

namespace StaticBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use StaticBundle\Mapper\MapperFactory;

class ServiceFactory
{
    protected $instances = [];
    protected $entityManager;
    protected $mapperFactory;

    public function __construct(EntityManagerInterface $entityManager, MapperFactory $mapperFactory)
    {
        $this->entityManager = $entityManager;
        $this->mapperFactory = $mapperFactory;
    }

    public function getMotoristaService()
    {
        if (!isset($this->instances['MotoristaService'])) {
            $this->instances['MotoristaService'] = new MotoristaService(
                $this->entityManager->getRepository('StaticBundle:Motorista'),
                $this->mapperFactory->getMotoristaMapper()
            );
        }
        return $this->instances['MotoristaService'];
    }

    public function getViagemService()
    {
        if (!isset($this->instances['ViagemService'])) {
            $this->instances['ViagemService'] = new ViagemService(
                $this->entityManager->getRepository('StaticBundle:StaticBundle\Data\Repository\Viagem'),
                $this->mapperFactory->getViagemMapper()
            );
        }
        return $this->instances['ViagemService'];
    }

    public function getLocalizacaoService()
    {
        if (!isset($this->instances['LocalizacaoService'])) {
            $this->instances['LocalizacaoService'] = new LocalizacaoService(
                $this->entityManager->getRepository('StaticBundle:StaticBundle\Data\Repository\Localizacao'),
                $this->mapperFactory->getLocalizacaoMapper()
            );
        }
        return $this->instances['LocalizacaoaService'];
    }
}