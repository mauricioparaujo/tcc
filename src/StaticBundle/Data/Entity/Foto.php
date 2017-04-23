<?php

namespace StaticBundle\Data\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Viagem
 *
 * @ORM\Table(name="foto")
 * @ORM\Entity(repositoryClass="StaticBundle\Data\Repository\FotoRepository")
 */
class Foto
{
    const CAMINHO_BASE = "./";

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}