<?php

namespace StaticBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use StaticBundle\Mapper\MapperFactory;

class ServiceFactory
{
    protected $instances = [];
    protected $entityManager;
    protected $mapperFactory;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getMotoristaService()
    {
        if (!isset($this->instances['MotoristaService'])) {
            $this->instances['MotoristaService'] =
                new MotoristaService($this->entityManager->getRepository('StaticBundle:Motorista'));
        }
        return $this->instances['MotoristaService'];
    }

    public function getViagemService()
    {
        if (!isset($this->instances['ViagemService'])) {
            $this->instances['ViagemService'] =
                new ViagemService($this->entityManager->getRepository('StaticBundle:Viagem'));
        }
        return $this->instances['ViagemService'];
    }

    public function getLocalizacaoService()
    {
        if (!isset($this->instances['LocalizacaoService'])) {
            $this->instances['LocalizacaoService'] =
                new LocalizacaoService($this->entityManager->getRepository('StaticBundle:Localizacao'));
        }
        return $this->instances['LocalizacaoaService'];
    }
}