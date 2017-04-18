<?php

namespace StaticBundle\Mapper;

class MotoristaMapper implements MapperInterface
{
    public function getDomainModel(array $entity)
    {
        var_dump($entity); die;
    }

    public function getDataModel()
    {
        // TODO: Implement getDataModel() method.
    }

}