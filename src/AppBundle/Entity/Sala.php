<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Reserva", mappedBy="sala", indexBy="idSala")
     * @var reservas[]
     */
    private $reservas;

    /**
     * Sala constructor.
     * @param string $identificacao
     * @param int $capacidade
     */
    public function __construct()
    {
        $this->reservas=new ArrayCollection();
    }

    public function addReserva(Reserva $reserva)
    {
        $this->reservas[$reserva->getIdReserva()] = $reserva;
    }

    public function getReserva($idReserva)
    {
        if (!isset($this->reservas[$idReserva])) {
            throw new \InvalidArgumentException("Reserva não encontrada");
        }

        return $this->reservas[$idReserva];
    }

    public function getReservas()
    {
        return $this->reservas->toArray();
    }
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

