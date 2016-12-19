<?php
/**
 * Created by PhpStorm.
 * User: Wagner
 * Date: 15/12/2016
 * Time: 15:45
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

/**
 * Login controller.
 *
 * @Route("/login")
 */
class LoginController extends Controller
{
    /**
     * @Route("/", name="login_index")
     * @Method("GET|POST")
     */
    public function indexAction(Request $request)
    {
        if ($request->getMethod()=='POST'){
            $usuario=$request->get('usuario');
            $senha=$request->get('senha');
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository('AppBundle:Usuario');

            $user = $repository->findOneBy(array('usuario'=>$usuario,'senha'=>$senha));

            if($user){
                $session = new Session();
                $session->set('usuario', $user);
                return $this->redirectToRoute('app_home_carregarhome');
            }
        }
            return $this->render('login/index.html.twig');

    }

    /**
     * Creates a new usuario login entity.
     *
     * @Route("/novo", name="login_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $usuario = new Usuario();
        $form = $this->createForm('AppBundle\Form\UsuarioType', $usuario);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush($usuario);

            return $this->redirectToRoute('login_index');
        }

        return $this->render('usuario/new.login.html.twig', array(
            'usuario' => $usuario,
            'form' => $form->createView(),
        ));
    }

}