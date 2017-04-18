<?php

namespace StaticBundle\Mapper;

class MapperFactory
{
    private $instances = [];

    public function getMotoristaMapper()
    {
        if (!isset($this->instances['MotoristaMapper'])) {
            $this->instances['MotoristaMapper'] = new MotoristaMapper();
        }
        return $this->instances['MotoristaMapper'];
    }

    public function getViagemMapper()
    {
        if (!isset($this->instances['ViagemMapper'])) {
            $this->instances['ViagemMapper'] = new ViagemMapper();
        }
        return $this->instances['ViagemMapper'];
    }

    public function getLocalizacaoMapper()
    {
        if (!isset($this->instances['LocalizacaoMapper'])) {
            $this->instances['LocalizacaoMapper'] = new LocalizacaoMapper();
        }
        return $this->instances['LocalizacaoMapper'];
    }
}