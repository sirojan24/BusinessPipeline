<?php

namespace SettingsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Login\LoginBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Response;
use SettingsBundle\Entity\Accounttypes;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SettingsBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function pipelinesetupAction (Request $request){
        $token = $request->getSession()->get('token');
        if ($token) {
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository("LoginLoginBundle:Users");
            $user = $repository->findOneBy(array('username' => $token->getUsername()));
            $fullname = $user->getFirstname() . " " . $user->getLastname();

            return $this->render('SettingsBundle:Default:pipelinesetup.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(), 'fullname' => $fullname));
        } else {

            return $this->render('LoginLoginBundle:Default:signinV2.html.twig', array('errormsg' => 'Please Login your account before you proceed.'));
        }
    }
}
