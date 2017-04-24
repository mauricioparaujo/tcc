<?php

namespace StaticBundle\Data\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

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

    /**
     * @var float
     *
     * @ORM\Column(name="acuracia", type="float", nullable=false)
     */
    private $acuracia = 0.0;

    /**
     * @var float
     *
     * @ORM\Column(name="direcao", type="float")
     */
    private $direcao = 0.0;


    /**
     * @var DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp = 0;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", nullable=false)
     */
    private $latitude = 0.0;


    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", nullable=false)
     */
    private $longitude = 0.0;


    /**
     * @var string
     *
     * @ORM\Column(name="provider", type="text")
     */
    private $provider;


    /**
     * @var float
     *
     * @ORM\Column(name="velocidade", type="float", nullable=false)
     */
    private $velocidade = 0.0;


    /**
     * @var Viagem
     *
     * @ORM\ManyToOne(targetEntity="Viagem", inversedBy="localizacoes")
     * @ORM\JoinColumn(name="viagem_id", referencedColumnName="id")
     */
    private $viagem;

    public function __construct(Viagem $viagem)
    {
        $this->viagem = $viagem;
    }

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
     * @return float
     */
    public function getAcuracia(): float
    {
        return $this->acuracia;
    }

    /**
     * @param float $acuracia
     */
    public function setAcuracia(float $acuracia)
    {
        $this->acuracia = $acuracia;
    }

    /**
     * @return float
     */
    public function getDirecao(): float
    {
        return $this->direcao;
    }

    /**
     * @param float $direcao
     */
    public function setDirecao(float $direcao)
    {
        $this->direcao = $direcao;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return $this->timestamp;
    }

    /**
     * @param int $timestamp
     */
    public function setTimestamp(int $timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function getProvider(): string
    {
        return $this->provider;
    }

    /**
     * @param string $provider
     */
    public function setProvider(string $provider)
    {
        $this->provider = $provider;
    }

    /**
     * @return float
     */
    public function getVelocidade(): float
    {
        return $this->velocidade;
    }

    /**
     * @param float $velocidade
     */
    public function setVelocidade(float $velocidade)
    {
        $this->velocidade = $velocidade;
    }

    /**
     * @return Viagem
     */
    public function getViagem(): Viagem
    {
        return $this->viagem;
    }

    /**
     * @param Viagem $viagem
     */
    public function setViagem(Viagem $viagem)
    {
        $this->viagem = $viagem;
    }
}