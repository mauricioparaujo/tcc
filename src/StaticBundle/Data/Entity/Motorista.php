<?php

namespace StaticBundle\Data\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motorista
 *
 * @ORM\Table(name="motorista")
 * @ORM\Entity(repositoryClass="StaticBundle\Data\Repository\MotoristaRepository")
 */
class Motorista
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
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=true)
     */
    private $nome;

    /**
     * @OneToMany(targetEntity="Viagem", mappedBy="motorista", cascade={"remove"})
     */
    private $viagens;

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
     * Set nome
     *
     * @param string $nome
     *
     * @return Motorista
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getViagens()
    {
        return $this->viagens;
    }

    /**
     * @param mixed $viagens
     */
    public function setViagens($viagens)
    {
        $this->viagens = $viagens;
    }


}

