<?php

namespace webBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Login\LoginBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Response;
use SettingsBundle\Entity\Accounttypes;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('webBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function supportAction(Request $request){
         $token = $request->getSession()->get('token');
        if ($token) {
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository("LoginLoginBundle:Users");
            $user = $repository->findOneBy(array('username' => $token->getUsername()));
            $fullname = $user->getFirstname() . " " . $user->getLastname();

            return $this->render('webBundle:Default:support.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(), 'fullname' => $fullname));
        } else {

            return $this->render('LoginLoginBundle:Default:signinV2.html.twig', array('errormsg' => 'Please Login your account before you proceed.'));
        }
    }
    
    public function dashboardAction (Request $request){
        
        $token = $request->getSession()->get('token');
        if ($token) {
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository("LoginLoginBundle:Users");
            $user = $repository->findOneBy(array('username' => $token->getUsername()));
            $fullname = $user->getFirstname() . " " . $user->getLastname();
            $deals = $this->countDeals($token);
            return $this->render('webBundle:Default:dashboard.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(), 
                'fullname' => $fullname, 'deals' => $deals));
       
        }else{
            return $this->render('LoginLoginBundle:Default:signinV2.html.twig', array('errormsg' => 'Please Login your account before you proceed.'));
        }
    }
    
    private function countDeals($token){
        $em = $this->getDoctrine()->getManager();
        $userRepository = $em->getRepository("LoginLoginBundle:Users");
        $stageRepository = $em->getRepository("SettingsBundle:Stages");
        $opportunityRepository = $em->getRepository("OpportunityBundle:Opportunities");
        $user = $userRepository->findOneBy(array('username' => $token->getUsername()));
        
        $params = array('user' => $user->getUsername(), 'userSub' => '%'.$user->getUsername().'%');
        $countDealQuery = "select stage,count(id) as noOfDeals from opportunities where status='Active' and "
                . "(username = :user or sharing like :userSub) group by stage";
        
        $stmt = $em-> getConnection() -> prepare($countDealQuery);
        $stmt->execute($params);
        
        $array = $stmt -> fetchAll();
        $returnArray = array();
        foreach ($array as $value) {
            $stage = $stageRepository -> findOneBy(array('id' => $value['stage']));
            if($stage){
                $value['stage'] = $stage->getName();
                array_push($returnArray, array('stage' => $stage->getName(), 'noOfDeals' => $value['noOfDeals']));
            }else{
                array_push($returnArray, array('stage' => $value['stage'], 'noOfDeals' => $value['noOfDeals']));
            }
        }
        
        return $returnArray;
    }
}
