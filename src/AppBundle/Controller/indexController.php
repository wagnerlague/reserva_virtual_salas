<?php
/**
 * Created by PhpStorm.
 * User: Wagner
 * Date: 18/12/2016
 * Time: 21:38
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Login controller.
 *
 * @Route("/")
 */
class indexController extends Controller
{
    /**
     * @Route("/", name="index")
     * @Method("GET|POST")
     */
    public function indexAction()
    {
        return $this->render('login/index.html.twig');
    }
}