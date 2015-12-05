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
            $stagesArray = $this->getStageTableData($token);
            return $this->render('SettingsBundle:Default:pipelinesetup.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(), 
                'fullname' => $fullname, 'stagesArray' => $stagesArray));
        } else {

            return $this->render('LoginLoginBundle:Default:signinV2.html.twig', array('errormsg' => 'Please Login your account before you proceed.'));
        }
    }
    
    private function getStageTableData($token) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("LoginLoginBundle:Users");
        $user = $repository->findOneBy(array('username' => $token->getUsername()));

        $repository1 = $em->getRepository("SettingsBundle:Stages");
        $stages = $repository1->findBy(array('companyname' => $user->getCompanyname()));

        $stagesArray = array();
        foreach ($stages as $stage) {
            //serialize obects to array
            $arrElement["id"] = $stage->getId();
            $arrElement["username"] = $stage->getUsername();
            $arrElement["stage"] = $stage->getName();
            $arrElement["saleChange"] = $stage->getSalechance();
            $arrElement["notes"] = $stage->getNotes();
            $arrElement["status"] = $stage->getStatus();

            array_push($stagesArray, $arrElement);
        }
        $response = array('stages' => $stagesArray);
        return json_encode($response);
    }
}
