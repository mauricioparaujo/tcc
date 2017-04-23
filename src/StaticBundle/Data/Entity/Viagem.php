<?php

namespace StaticBundle\Data\Entity;

use Symfony\Component\Validator\Constraints\DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Viagem
 *
 * @ORM\Table(name="viagem")
 * @ORM\Entity(repositoryClass="StaticBundle\Data\Repository\ViagemRepository")
 */
class Viagem
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
     * @var DateTime
     *
     * @ORM\Column(name="inicio", type="datetime", nullable=false)
     */
    private $inicio = 0;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="fim", type="datetime", nullable=true)
     */
    private $fim;

    /**
     * @var Foto
     *
     * @ORM\OneToOne(targetEntity="Foto", cascade={"remove"})
     * @ORM\JoinColumn(name="foto_inicial_id", referencedColumnName="id", nullable=false)
     */
    private $fotoInicial = "";

    /**
     * @var Foto
     *
     * @ORM\OneToOne(targetEntity="Foto", cascade={"remove"})
     * @ORM\JoinColumn(name="foto_final_id", referencedColumnName="id")
     */
    private $fotoFinal;

    /**
     * @var Motorista
     *
     * @ORM\ManyToOne(targetEntity="Motorista", inversedBy="viagens")
     * @ORM\JoinColumn(name="motorista_id", referencedColumnName="id")
     */
    private $motorista;

    /**
     * @var Localizacao[]
     *
     * @ORM\OneToMany(targetEntity="Localizacao", mappedBy="viagem", cascade={"remove"})
     */
    private $localizacoes = [];

    public function __construct(DateTime $inicio, Foto $fotoInicial, Motorista $motorista)
    {
        $this->inicio = $inicio;
        $this->fotoInicial = $fotoInicial;
        $this->motorista = $motorista;
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
     * @return DateTime
     */
    public function getInicio(): DateTime
    {
        return $this->inicio;
    }

    /**
     * @param DateTime $inicio
     */
    public function setInicio(DateTime $inicio)
    {
        $this->inicio = $inicio;
    }

    /**
     * @return DateTime
     */
    public function getFim(): DateTime
    {
        return $this->fim;
    }

    /**
     * @param DateTime $fim
     */
    public function setFim(DateTime $fim)
    {
        $this->fim = $fim;
    }

    /**
     * @return string
     */
    public function getFotoInicial(): string
    {
        return $this->fotoInicial;
    }

    /**
     * @param string $fotoInicial
     */
    public function setFotoInicial(string $fotoInicial)
    {
        $this->fotoInicial = $fotoInicial;
    }

    /**
     * @return string
     */
    public function getFotoFinal(): string
    {
        return $this->fotoFinal;
    }

    /**
     * @param string $fotoFinal
     */
    public function setFotoFinal(string $fotoFinal)
    {
        $this->fotoFinal = $fotoFinal;
    }

    /**
     * @return Motorista
     */
    public function getMotorista()
    {
        return $this->motorista;
    }

    /**
     * @return array
     */
    public function getLocalizacoes()
    {
        return $this->localizacoes;
    }

    /**
     * @param Localizacao $localizacoes
     */
    public function addLocalizacao(Localizacao $localizacao)
    {
        $this->localizacoes[] = $localizacao;
    }
}