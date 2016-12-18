<?php
/**
 * Created by PhpStorm.
 * User: Wagner
 * Date: 15/12/2016
 * Time: 22:36
 */

namespace AppBundle\Entity;

use AppBundle\Repository\SalaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="reservas")
 */
class Reserva
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     *
     */
    private $id_reserva;

    /**
     * @ORM\Column(name="data_hora", type="datetime", nullable=false)
     *
     */
    private $data_hora;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario", inversedBy="reservas")
     * @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * @ORM\Column(name="id_usuario", type="integer")
     * @var usuario
     */
    private $usuario;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Sala", inversedBy="reservas")
     * @ORM\JoinColumn(name="id_sala", referencedColumnName="id_sala")
     * @ORM\Column(name="id_sala", type="integer")
     * @var sala
     */
    private $sala;

    /**
     * @ORM\Column(name="hora", type="string", length=5, nullable=false)
     *
     */
    private $hora;

    /**
     * @ORM\Column(name="status", type="string", length=1, nullable=false)
     *
     */
    private $status;

    /**
     * Reserva constructor.
     * @param $data_hora
     * @param usuario $usuario
     * @param sala $sala
     * @param $hora
     * @param $status
     */
    public function __construct(usuario $usuario, sala $sala)
    {
        $this->usuario = $usuario;
        $usuario->addReserva($this);
        $this->sala = $sala;
        $sala->addReserva($this);
    }

    /**
     * @return mixed
     */
    public function getIdReserva()
    {
        return $this->id_reserva;
    }

    /**
     * @param mixed $id_reserva
     */
    public function setIdReserva($id_reserva)
    {
        $this->id_reserva = $id_reserva;
    }

    /**
     * @return mixed
     */
    public function getDataHora()
    {
        return $this->data_hora;
    }

    /**
     * @param mixed $data_hora
     */
    public function setDataHora($data_hora)
    {
        $this->data_hora = $data_hora;
    }

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}