<?php

namespace SettingsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Login\LoginBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Response;
use SettingsBundle\Entity\Accounttypes;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render('SettingsBundle:Default:index.html.twig', array('name' => $name));
    }

    public function pipelinesetupAction(Request $request) {
        $token = $request->getSession()->get('token');
        if ($token) {
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository("LoginLoginBundle:Users");
            $user = $repository->findOneBy(array('username' => $token->getUsername()));
            $fullname = $user->getFirstname() . " " . $user->getLastname();

            $stagesArray = $this->getStageTableData($token);
            $accountTypesArray = $this->getAccountTypeData($token);
            $productTypesArray = $this->getProductTypeData($token);
            $opportunitySourceArray = $this->getOpportunitySourceData($token);

            return $this->render('SettingsBundle:Default:pipelinesetup.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(),
                        'fullname' => $fullname, 'stagesArray' => $stagesArray, 'accountTypeArray' => $accountTypesArray,
                        'productTypeArray' => $productTypesArray, 'opportunitySourceArray' => $opportunitySourceArray));
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

    private function getAccountTypeData($token) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("LoginLoginBundle:Users");
        $user = $repository->findOneBy(array('username' => $token->getUsername()));

        $repository1 = $em->getRepository("SettingsBundle:Accounttypes");
        $accountTypes = $repository1->findBy(array('companyname' => $user->getCompanyname()));

        $accountTypesArray = array();
        foreach ($accountTypes as $accountType) {
            //serialize obects to array
            $arrElement["id"] = $accountType->getId();
            $arrElement["username"] = $accountType->getUsername();
            $arrElement["accountType"] = $accountType->getName();
            $arrElement["notes"] = $accountType->getNotes();
            $arrElement["status"] = $accountType->getStatus();

            array_push($accountTypesArray, $arrElement);
        }
        $response = array('accountTypes' => $accountTypesArray);
        return json_encode($response);
    }

    private function getProductTypeData($token) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("LoginLoginBundle:Users");
        $user = $repository->findOneBy(array('username' => $token->getUsername()));

        $repository1 = $em->getRepository("SettingsBundle:Producttypes");
        $producttypes = $repository1->findBy(array('companyname' => $user->getCompanyname()));

        $productTypesArray = array();

        foreach ($producttypes as $productType) {
            //serialize obects to array
            $arrElement["id"] = $productType->getId();
            $arrElement["username"] = $productType->getUsername();
            $arrElement["productType"] = $productType->getName();
            $arrElement["notes"] = $productType->getNotes();
            $arrElement["status"] = $productType->getStatus();

            array_push($productTypesArray, $arrElement);
        }
        $response = array('productTypes' => $productTypesArray);
        return json_encode($response);
    }

    private function getOpportunitySourceData($token) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("LoginLoginBundle:Users");
        $user = $repository->findOneBy(array('username' => $token->getUsername()));
        
        $repository1 = $em->getRepository("SettingsBundle:Opportunitysources");
        $sources = $repository1->findBy(array('companyname' => $user->getCompanyname()));
        
        $opportunitySourceArray = array();

        foreach ($sources as $productType) {
            //serialize obects to array
            $arrElement["id"] = $productType->getId();
            $arrElement["username"] = $productType->getUsername();
            $arrElement["opportunitySource"] = $productType->getName();
            $arrElement["notes"] = $productType->getNotes();
            $arrElement["status"] = $productType->getStatus();

            array_push($opportunitySourceArray, $arrElement);
        }
        $response = array('opportunitySources' => $opportunitySourceArray);
        return json_encode($response);
    }

}
