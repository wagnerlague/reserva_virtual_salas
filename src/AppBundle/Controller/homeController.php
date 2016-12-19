<?php
/**
 * Created by PhpStorm.
 * User: Wagner
 * Date: 16/12/2016
 * Time: 13:14
 */

namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Home controller.
 *
 * @Route("home")
 */
class homeController extends Controller
{
    /**
     * @Route("/"), name="/home"
     */
    public function carregarHome()
    {


        $usuariologado = $this->get('session')->get('usuario');
        $em = $this->getDoctrine()->getManager();
        $criteria = array('status' => 'A');
        $reservas = $em->getRepository('AppBundle:Reserva')->findBy($criteria);
        #dump($reservas);die();
        return $this->render('home/home.html.twig',array('reservas'=>$reservas,'usuarios'=>$usuariologado));
    }

}