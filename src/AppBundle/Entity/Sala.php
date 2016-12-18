<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sala
 *
 * @ORM\Table(name="salas")
 * @ORM\Entity()
 */
class Sala
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_sala", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idSala;

    /**
     * @var string
     *
     * @ORM\Column(name="identificacao", type="string", length=255)
     */
    private $identificacao;

    /**
     * @var int
     *
     * @ORM\Column(name="capacidade", type="integer")
     */
    private $capacidade;


    /**
     * Set idSala
     *
     * @param integer $idSala
     *
     * @return Sala
     */
    public function setIdSala($idSala)
    {
        $this->idSala = $idSala;

        return $this;
    }

    /**
     * Get idSala
     *
     * @return int
     */
    public function getIdSala()
    {
        return $this->idSala;
    }

    /**
     * Set identificacao
     *
     * @param string $identificacao
     *
     * @return Sala
     */
    public function setIdentificacao($identificacao)
    {
        $this->identificacao = $identificacao;

        return $this;
    }

    /**
     * Get identificacao
     *
     * @return string
     */
    public function getIdentificacao()
    {
        return $this->identificacao;
    }

    /**
     * Set capacidade
     *
     * @param integer $capacidade
     *
     * @return Sala
     */
    public function setCapacidade($capacidade)
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Get capacidade
     *
     * @return int
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }
}

