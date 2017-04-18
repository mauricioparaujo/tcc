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

    /**
     * @ORM\Column(name="inicio", type="datetime")
     */
    private $inicio;

    /**
     * @ORM\Column(name="fim", type="datetime")
     */
    private $fim;

    /**
     * @ORM\Column(name="fotoInicial", type="string", length=255, nullable=false)
     */
    private $fotoInicial;

    /**
     * @ORM\Column(name="fotoFinal", type="string", length=255, nullable=true)
     */
    private $fotoFinal;

    /**
     * @ManyToOne(targetEntity="Motorista", inversedBy="viagens")
     */
    private $motorista;

    /**
     * @OneToMany(targetEntity="Localizacao", mappedBy="viagem")
     */
    private $localizacoes;

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
    public function getMotorista()
    {
        return $this->motorista;
    }

    /**
     * @param mixed $motorista
     */
    public function setMotorista($motorista)
    {
        $this->motorista = $motorista;
    }

    /**
     * @return mixed
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * @param mixed $inicio
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;
    }

    /**
     * @return mixed
     */
    public function getFim()
    {
        return $this->fim;
    }

    /**
     * @param mixed $fim
     */
    public function setFim($fim)
    {
        $this->fim = $fim;
    }

    /**
     * @return mixed
     */
    public function getFotoInicial()
    {
        return $this->fotoInicial;
    }

    /**
     * @param mixed $fotoInicial
     */
    public function setFotoInicial($fotoInicial)
    {
        $this->fotoInicial = $fotoInicial;
    }

    /**
     * @return mixed
     */
    public function getFotoFinal()
    {
        return $this->fotoFinal;
    }

    /**
     * @param mixed $fotoFinal
     */
    public function setFotoFinal($fotoFinal)
    {
        $this->fotoFinal = $fotoFinal;
    }

    /**
     * @return mixed
     */
    public function getLocalizacoes()
    {
        return $this->localizacoes;
    }

    /**
     * @param mixed $localizacoes
     */
    public function setLocalizacoes($localizacoes)
    {
        $this->localizacoes = $localizacoes;
    }
}