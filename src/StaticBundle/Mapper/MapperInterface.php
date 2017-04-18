<?php

namespace StaticBundle\Mapper;

interface MapperInterface
{
    public function getDomainModel(array $entity);

    public function getDataModel();
}