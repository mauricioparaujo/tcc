<?php

namespace StaticBundle\Service;

use Doctrine\ORM\EntityRepository;
use StaticBundle\Mapper\MapperInterface;

abstract class AbstractService
{
    /**
     * @var EntityRepository
     */
    protected $repository;

    /**
     * @var MapperInterface
     */
    protected $mapper;

    public function __construct(
        EntityRepository $repository,
        MapperInterface $mapper
    ) {
        $this->repository = $repository;
        $this->mapper = $mapper;
    }

    protected function mapSingleEntity(array $dbEntity, ...$additionalArgs)
    {
        if (is_null($dbEntity)) {
            return null;
        }
        return $this->mapper->getDomainModel($dbEntity, ...$additionalArgs);
    }

    protected function mapManyEntities(array $dbEntities, ...$additionalArgs)
    {
        $mappedEntities = [];
        foreach ($dbEntities as $dbEntity) {
            $mappedEntities[] = $this->mapSingleEntity($dbEntity, ...$additionalArgs);
        }
        return $mappedEntities;
    }
}