<?php

namespace StaticBundle\Mapper;

interface MapperInterface
{
    public function getDomainModel();

    public function getDataModel();
}