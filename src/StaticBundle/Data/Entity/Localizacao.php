<?php

namespace StaticBundle\Data\Entity;

/**
 * Localizacao
 *
 * @ORM\Table(name="localizacao")
 * @ORM\Entity(repositoryClass="StaticBundle\Data\Repository\LocalizacaoRepository")
 */
class Localizacao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    private $acuracia;

    private $direcao;

    private $acuraciaDirecao;

    private $timestamp;

    private $latitude;

    private $longitude;

    private $provider;

    private $velocidade;

    private $acuraciaVelocidade;

    private $acuraciaVertical;

    private $viagem;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAcuracia()
    {
        return $this->acuracia;
    }

    /**
     * @param mixed $acuracia
     */
    public function setAcuracia($acuracia)
    {
        $this->acuracia = $acuracia;
    }

    /**
     * @return mixed
     */
    public function getDirecao()
    {
        return $this->direcao;
    }

    /**
     * @param mixed $direcao
     */
    public function setDirecao($direcao)
    {
        $this->direcao = $direcao;
    }

    /**
     * @return mixed
     */
    public function getAcuraciaDirecao()
    {
        return $this->acuraciaDirecao;
    }

    /**
     * @param mixed $acuraciaDirecao
     */
    public function setAcuraciaDirecao($acuraciaDirecao)
    {
        $this->acuraciaDirecao = $acuraciaDirecao;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param mixed $provider
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
    }

    /**
     * @return mixed
     */
    public function getVelocidade()
    {
        return $this->velocidade;
    }

    /**
     * @param mixed $velocidade
     */
    public function setVelocidade($velocidade)
    {
        $this->velocidade = $velocidade;
    }

    /**
     * @return mixed
     */
    public function getAcuraciaVelocidade()
    {
        return $this->acuraciaVelocidade;
    }

    /**
     * @param mixed $acuraciaVelocidade
     */
    public function setAcuraciaVelocidade($acuraciaVelocidade)
    {
        $this->acuraciaVelocidade = $acuraciaVelocidade;
    }

    /**
     * @return mixed
     */
    public function getAcuraciaVertical()
    {
        return $this->acuraciaVertical;
    }

    /**
     * @param mixed $acuraciaVertical
     */
    public function setAcuraciaVertical($acuraciaVertical)
    {
        $this->acuraciaVertical = $acuraciaVertical;
    }
}