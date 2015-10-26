<?php

namespace OpportunityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Login\LoginBundle\Entity\Users;
use Symfony\Component\HttpFoundation\Response;
use Login\LoginBundle\Modals\Login;
use OpportunityBundle\Entity\Opportunities;
class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OpportunityBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function addopportunityAction (Request $request){
        $token = $request->getSession()->get('token');
        if($token){
            $em = $this->getDoctrine()->getManager();
           
            $repository = $em->getRepository("LoginLoginBundle:Users");
            $repository1 = $em->getRepository("SettingsBundle:Accounttypes");
            $repository2 = $em->getRepository("SettingsBundle:Stages");
            $repository3 = $em->getRepository("SettingsBundle:Producttypes");
            $repository4 = $em->getRepository("SettingsBundle:Opportunitysources");
            
            $user = $repository->findOneBy(array('username' => $token->getUsername()));
            $accounttypes = $repository1->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
            $stages = $repository2->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
            $producttypes = $repository3->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'),array('name' => 'ASC'));
            $opportunitysources = $repository4->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
            
            
            $currentUser = $repository->findOneBy(array('username' => $token->getUsername()));
            $fullname = $currentUser->getFirstname()." ".$currentUser->getLastname();
            $currentCompany = $currentUser->getCompanyname();
            $users = $repository->findBy(array('companyname' => $currentCompany,'status'=> 'Active'));
            
            
             return $this->render('OpportunityBundle:Default:addOpportunity.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(),'accounttypes'=>$accounttypes ,'stages'=>$stages,'producttypes'=>$producttypes,'opportunitysources'=>$opportunitysources,'users'=>$users,'fullname'=>$fullname )); 
        }else{
            
             return $this->render('LoginLoginBundle:Default:signIn.html.twig', array('errormsg' => 'Please Login your account before you proceed.'));
        }
    }
    
    public function addcontactopportunityAction (Request $request,$name,$orgname,$id){
        $token = $request->getSession()->get('token');
        if($token){
            $em = $this->getDoctrine()->getManager();
           
            $repository = $em->getRepository("LoginLoginBundle:Users");
            $repository1 = $em->getRepository("SettingsBundle:Accounttypes");
            $repository2 = $em->getRepository("SettingsBundle:Stages");
            $repository3 = $em->getRepository("SettingsBundle:Producttypes");
            $repository4 = $em->getRepository("SettingsBundle:Opportunitysources");
            
            $user = $repository->findOneBy(array('username' => $token->getUsername()));
            $accounttypes = $repository1->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
            $stages = $repository2->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
            $producttypes = $repository3->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'),array('name' => 'ASC'));
            $opportunitysources = $repository4->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
            
            
            $currentUser = $repository->findOneBy(array('username' => $token->getUsername()));
            $fullname = $currentUser->getFirstname()." ".$currentUser->getLastname();
            $currentCompany = $currentUser->getCompanyname();
            $users = $repository->findBy(array('companyname' => $currentCompany,'status'=> 'Active'));
            
            $opportunityname = $name;
            $organizationname = $orgname;
            
             return $this->render('OpportunityBundle:Default:addOpportunity.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(),'accounttypes'=>$accounttypes ,'stages'=>$stages,'producttypes'=>$producttypes,'opportunitysources'=>$opportunitysources,'users'=>$users,'fullname'=>$fullname,'personname'=>$opportunityname,'organizationname'=>$organizationname,'contactid'=>$id)); 
        }else{
            
             return $this->render('LoginLoginBundle:Default:signIn.html.twig', array('errormsg' => 'Please Login your account before you proceed.'));
        }
    }
    
    public function saveopportunityAction (Request $request){
        $token = $request->getSession()->get('token');
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("LoginLoginBundle:Users");
        $repository1 = $em->getRepository("OpportunityBundle:Opportunities");
        if($token && $request->getMethod() == 'POST'){
                $user = $repository->findOneBy(array('username' => $token->getUsername()));
                $fullname = $user->getFirstname()." ".$user->getLastname();
                $opportunitie = new Opportunities();
                $opportunitie->setUsername($token->getUsername());
                $opportunitie->setOwnedcompany($user->getCompanyname());
                $opportunitie->setStatus("Active");
                $opportunitie->setPersonname($request->get('personname'));
                $opportunitie->setOrganizationname($request->get('organizationname'));
                $opportunitie->setProjectedrevenue($request->get('projectedrevenue'));
                $opportunitie->setAccounttype($request->get('accounttype'));
                $opportunitie->setStage($request->get('stage'));
                $opportunitie->setProducttype($request->get('producttype'));
                $opportunitie->setOpportunitysource($request->get('opportunitysource'));
                $opportunitie->setNotes($request->get('notes'));
                $opportunitie->setVisibility($request->get('visibility'));
                $opportunitie->setForecast($request->get('forecast'));
                $opportunitie->setCloseddate($request->get('closeddate'));
                $opportunitie->setRevenue($request->get('revenue'));
                $opportunitie->setUserrevenue($request->get('userrevenue'));
                $opportunitie->setReason($request->get('reason'));
                $opportunitie->setContactid($request->get('contactid'));
                $sharingusers = '';
                $colonFlag = true;
                if($request->get('sharingusers')){
                foreach ($request->get('sharingusers') as $sharinguser) {
                    if(!$colonFlag){
                        $sharingusers .= ':';
                    }
                    $sharingusers .= $sharinguser ;
                    $colonFlag = false;
                }
                }
                $opportunitie->setSharing($sharingusers);
             try{  
                $em->persist($opportunitie);
                $em->flush();
                $repository2 = $em->getRepository("SettingsBundle:Stages");
                
                $repository3 = $em->getRepository("SettingsBundle:Accounttypes");
            $repository4 = $em->getRepository("SettingsBundle:Producttypes");
            $repository5 = $em->getRepository("SettingsBundle:Opportunitysources");
            
            $user = $repository->findOneBy(array('username' => $token->getUsername()));
            $fullname = $user->getFirstname()." ".$user->getLastname();
            $opportunities = $repository1->findBy(array('ownedcompany' => $user->getCompanyname(),'status'=> 'Active'));
            foreach ($opportunities as $opportunity) {
                $ownedUser = $repository->findOneBy(array('username' => $opportunity->getUsername()));
                        $ownedUserfullname = $ownedUser->getFirstname()." ".$ownedUser->getLastname();
                        $opportunity->setOwnerfullname($ownedUserfullname);
                        $stage = $repository2->findOneBy(array('id' => $opportunity->getStage()));
                        if($stage){
                            $opportunity->setChanceofsale($stage->getSalechance());
                            $opportunity->setStage($stage->getName());
                        }
                        if($opportunity->getStage() == '6'){
                            $opportunity->setChanceofsale('100');
                        }
                        if($opportunity->getStage() == '7'){
                            $opportunity->setChanceofsale('0');
                        }
                        $accounttype = $repository3->findOneBy(array('id' => $opportunity->getAccounttype()));
                        if($accounttype){
                            $opportunity->setAccounttype($accounttype->getName());
                        }
                        
                        $producttype = $repository4->findOneBy(array('id' => $opportunity->getProducttype()));
                        if($producttype){
                            $opportunity->setProducttype($producttype->getName());
                        }
                        
                        $opportunitysource = $repository5->findOneBy(array('id' => $opportunity->getOpportunitysource()));
                        if($opportunitysource){
                            $opportunity->setOpportunitysource($opportunitysource->getName());
                        }
                        
                                
                        $sharinguserstring = $opportunity->getSharing();
                        $sharedusers = explode(":",$sharinguserstring);
                        $sharedPercentage = 0;
                        $individualforecast = -1;
                    
                    if($sharinguserstring != ''){
                
                        foreach ($sharedusers as $shareduser){

                           $sharingUser = $repository->findOneBy(array('username' => $shareduser));
                           $sharedPercentage += $sharingUser->getCommissionnonoriginator();


                        }

                        if($opportunity->getUsername()== $token->getUsername()){
                            if(($sharedPercentage + $user->getCommissionoriginator()) >= 100 ){
                                $individualforecast = (str_replace(",", "", $opportunity->getForecast())* $user->getCommissionoriginator())/100;
                                //$individualforecast = 1200;
                                $decimalCount = explode(".", $individualforecast);
                                //echo count($decimalCount);
                                //exit;
                                if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }

                            }else{
                                $individualforecast = (str_replace(",", "", $opportunity->getForecast()) *  ($user->getCommissionoriginator()+ (100 - ($sharedPercentage + $user->getCommissionoriginator()))))/100;
                                $decimalCount = explode(".", $individualforecast);
                                if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }
                            }
                        }else if(in_array($token->getUsername(), $sharedusers)){
                            if(($sharedPercentage + $ownedUser->getCommissionoriginator()) > 100 ){
                                 $individualforecast = (str_replace(",", "", $opportunity->getForecast()) * ($user->getCommissionnonoriginator()- ((($sharedPercentage + $ownedUser->getCommissionoriginator())- 100 )/count($sharedusers))))/100;
                                 $decimalCount = explode(".", $individualforecast);
                                 if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }
                            }else{
                                $individualforecast = (str_replace(",", "", $opportunity->getForecast()) * $user->getCommissionnonoriginator())/100; 
                                $decimalCount = explode(".", $individualforecast);
                                 if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }
                            }
                        }
                    }    
                    $opportunity->setCurrentuserforecast($individualforecast);
                }
                
            
                 return $this->render('OpportunityBundle:Default:manageOpportunity.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(),'fullname'=>$fullname,'successmsg' => "Well done ! You successfully add an Opportunity ",'opportunities'=>$opportunities,'manageview'=>$user->getOpportunityview() ));
              } catch(Doctrine\ORM\ORMInvalidArgumentException $e){
              
                return $this->render('OpportunityBundle:Default:addOpportunity.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(),'fullname'=>$fullname,'errormsg' => 'Invalid Arguments. Try Again'));  
              }
              
            
        }else{
            
             return $this->render('LoginLoginBundle:Default:signIn.html.twig', array('errormsg' => 'You need admin login to proceed.'));
        }
        
    }
    
    public function editopportunityAction(Request $request,$id){
         $token = $request->getSession()->get('token');
        if($token){
            $em = $this->getDoctrine()->getManager();
           
            $repository = $em->getRepository("LoginLoginBundle:Users");
            $repository1 = $em->getRepository("SettingsBundle:Accounttypes");
            $repository2 = $em->getRepository("SettingsBundle:Stages");
            $repository3 = $em->getRepository("SettingsBundle:Producttypes");
            $repository4 = $em->getRepository("SettingsBundle:Opportunitysources");
            $repository5 = $em->getRepository("OpportunityBundle:Opportunities");
            
            $user = $repository->findOneBy(array('username' => $token->getUsername()));
            $accounttypes = $repository1->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
            $stages = $repository2->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
            $producttypes = $repository3->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'),array('name' => 'ASC'));
            $opportunitysources = $repository4->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
           
            $opportunity = $repository5->findOneBy(array('id' =>  $id));
            
             $currentUser = $repository->findOneBy(array('username' => $token->getUsername()));
             $fullname = $currentUser->getFirstname()." ".$currentUser->getLastname();
             
            $currentCompany = $currentUser->getCompanyname();
            $users = $repository->findBy(array('companyname' => $currentCompany,'status'=> 'Active'));
            
             return $this->render('OpportunityBundle:Default:editOpportunity.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(),'accounttypes'=>$accounttypes ,'stages'=>$stages,'producttypes'=>$producttypes,'opportunitysources'=>$opportunitysources,'opportunity'=>$opportunity,'users'=>$users,'fullname'=>$fullname )); 
        }else{
            
             return $this->render('LoginLoginBundle:Default:signIn.html.twig', array('errormsg' => 'Please Login your account before you proceed.'));
        }
    }
    public function limitededitopportunityAction(Request $request,$id){
         $token = $request->getSession()->get('token');
        if($token){
            $em = $this->getDoctrine()->getManager();
           
            $repository = $em->getRepository("LoginLoginBundle:Users");
            $repository1 = $em->getRepository("SettingsBundle:Accounttypes");
            $repository2 = $em->getRepository("SettingsBundle:Stages");
            $repository3 = $em->getRepository("SettingsBundle:Producttypes");
            $repository4 = $em->getRepository("SettingsBundle:Opportunitysources");
            $repository5 = $em->getRepository("OpportunityBundle:Opportunities");
            
            $user = $repository->findOneBy(array('username' => $token->getUsername()));
            $accounttypes = $repository1->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
            $stages = $repository2->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
            $producttypes = $repository3->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'),array('name' => 'ASC'));
            $opportunitysources = $repository4->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
           
            $opportunity = $repository5->findOneBy(array('id' =>  $id));
            
             $currentUser = $repository->findOneBy(array('username' => $token->getUsername()));
             $fullname = $currentUser->getFirstname()." ".$currentUser->getLastname();
            $currentCompany = $currentUser->getCompanyname();
            $users = $repository->findBy(array('companyname' => $currentCompany,'status'=> 'Active'));
            
             return $this->render('OpportunityBundle:Default:editOpportunity.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(),'accounttypes'=>$accounttypes ,'stages'=>$stages,'producttypes'=>$producttypes,'opportunitysources'=>$opportunitysources,'opportunity'=>$opportunity,'users'=>$users,'fullname'=>$fullname,'flag'=>'true','successmsg' => "You can edit the Notes only! " )); 
        }else{
            
             return $this->render('LoginLoginBundle:Default:signIn.html.twig', array('errormsg' => 'Please Login your account before you proceed.'));
        }
    }
    public function activateopportunityAction(Request $request,$id){
        $token = $request->getSession()->get('token');
        if($token){
              $em = $this->getDoctrine()->getManager();
              
               $repository1 = $em->getRepository("OpportunityBundle:Opportunities");
               $opportunitie = $repository1->findOneBy(array('id' => $id));
               $opportunitie->setStatus("Active");
               try{

                    $em->flush();
                    $repository = $em->getRepository("LoginLoginBundle:Users");
                    $repository2 = $em->getRepository("SettingsBundle:Stages");
                    $repository3 = $em->getRepository("SettingsBundle:Accounttypes");
                    $repository4 = $em->getRepository("SettingsBundle:Producttypes");
                    $repository5 = $em->getRepository("SettingsBundle:Opportunitysources");

                    $user = $repository->findOneBy(array('username' => $token->getUsername()));
                    $fullname = $user->getFirstname()." ".$user->getLastname();
                    $opportunities = $repository1->findBy(array('ownedcompany' => $user->getCompanyname(),'status'=> 'Active'));
            foreach ($opportunities as $opportunity) {
                $ownedUser = $repository->findOneBy(array('username' => $opportunity->getUsername()));
                        $ownedUserfullname = $ownedUser->getFirstname()." ".$ownedUser->getLastname();
                        $opportunity->setOwnerfullname($ownedUserfullname);
                        $stage = $repository2->findOneBy(array('id' => $opportunity->getStage()));
                        if($stage){
                            $opportunity->setChanceofsale($stage->getSalechance());
                            $opportunity->setStage($stage->getName());
                        }
                        if($opportunity->getStage() == '6'){
                            $opportunity->setChanceofsale('100');
                        }
                        if($opportunity->getStage() == '7'){
                            $opportunity->setChanceofsale('0');
                        }
                        $accounttype = $repository3->findOneBy(array('id' => $opportunity->getAccounttype()));
                        if($accounttype){
                            $opportunity->setAccounttype($accounttype->getName());
                        }
                        
                        $producttype = $repository4->findOneBy(array('id' => $opportunity->getProducttype()));
                        if($producttype){
                            $opportunity->setProducttype($producttype->getName());
                        }
                        
                        $opportunitysource = $repository5->findOneBy(array('id' => $opportunity->getOpportunitysource()));
                        if($opportunitysource){
                            $opportunity->setOpportunitysource($opportunitysource->getName());
                        }
                        
                                
                        $sharinguserstring = $opportunity->getSharing();
                        $sharedusers = explode(":",$sharinguserstring);
                        $sharedPercentage = 0;
                        $individualforecast = -1;
                    
                    if($sharinguserstring != ''){
                
                        foreach ($sharedusers as $shareduser){

                           $sharingUser = $repository->findOneBy(array('username' => $shareduser));
                           $sharedPercentage += $sharingUser->getCommissionnonoriginator();


                        }

                        if($opportunity->getUsername()== $token->getUsername()){
                            if(($sharedPercentage + $user->getCommissionoriginator()) >= 100 ){
                                $individualforecast = (str_replace(",", "", $opportunity->getForecast())* $user->getCommissionoriginator())/100;
                                //$individualforecast = 1200;
                                $decimalCount = explode(".", $individualforecast);
                                //echo count($decimalCount);
                                //exit;
                                if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }

                            }else{
                                $individualforecast = (str_replace(",", "", $opportunity->getForecast()) *  ($user->getCommissionoriginator()+ (100 - ($sharedPercentage + $user->getCommissionoriginator()))))/100;
                                $decimalCount = explode(".", $individualforecast);
                                if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }
                            }
                        }else if(in_array($token->getUsername(), $sharedusers)){
                            if(($sharedPercentage + $ownedUser->getCommissionoriginator()) > 100 ){
                                 $individualforecast = (str_replace(",", "", $opportunity->getForecast()) * ($user->getCommissionnonoriginator()- ((($sharedPercentage + $ownedUser->getCommissionoriginator())- 100 )/count($sharedusers))))/100;
                                 $decimalCount = explode(".", $individualforecast);
                                 if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }
                            }else{
                                $individualforecast = (str_replace(",", "", $opportunity->getForecast()) * $user->getCommissionnonoriginator())/100; 
                                $decimalCount = explode(".", $individualforecast);
                                 if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }
                            }
                        }
                    }    
                    $opportunity->setCurrentuserforecast($individualforecast);
                    }
                    return $this->render('OpportunityBundle:Default:manageOpportunity.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(),'opportunities'=> $opportunities,'fullname'=>$fullname,'successmsg' => "Well done ! You successfully activate the opportunity",'manageview'=>$user->getOpportunityview() ));
       
                } catch(Doctrine\ORM\ORMInvalidArgumentException $e){
                    
                    $repository = $em->getRepository("LoginLoginBundle:Users");
                    $repository5 = $em->getRepository("SettingsBundle:Accounttypes");
                    $repository2 = $em->getRepository("SettingsBundle:Stages");
                    $repository3 = $em->getRepository("SettingsBundle:Producttypes");
                    $repository4 = $em->getRepository("SettingsBundle:Opportunitysources");
                    

                    $user = $repository->findOneBy(array('username' => $token->getUsername()));
                    $accounttypes = $repository5->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
                    $stages = $repository2->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
                    $producttypes = $repository3->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
                    $opportunitysources = $repository4->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
                    
                     $currentUser = $repository->findOneBy(array('username' => $token->getUsername()));
                     $fullname = $currentUser->getFirstname()." ".$currentUser->getLastname();
                    $currentCompany = $currentUser->getCompanyname();
                    $users = $repository->findBy(array('companyname' => $currentCompany,'status'=> 'Active'));
                    
                    return $this->render('OpportunityBundle:Default:editOpportunity.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(),'fullname'=>$fullname,'errormsg' => 'Something went wrong. Try Again','opportunity'=> $opportunity,'accounttypes'=>$accounttypes ,'stages'=>$stages,'producttypes'=>$producttypes,'opportunitysources'=>$opportunitysources,'users'=>$users));  
              }
            
        }else{
            
             return $this->render('LoginLoginBundle:Default:signIn.html.twig', array('errormsg' => 'Please Login your account before you proceed.'));
        } 
    }
    
    public function manageopportunityAction(Request $request){
         $token = $request->getSession()->get('token');
        if($token){
            $em = $this->getDoctrine()->getManager();
           
            $repository = $em->getRepository("LoginLoginBundle:Users");
            $repository1 = $em->getRepository("OpportunityBundle:Opportunities");
            $repository2 = $em->getRepository("SettingsBundle:Stages");
            $repository3 = $em->getRepository("SettingsBundle:Accounttypes");
            $repository4 = $em->getRepository("SettingsBundle:Producttypes");
            $repository5 = $em->getRepository("SettingsBundle:Opportunitysources");
            
            $user = $repository->findOneBy(array('username' => $token->getUsername()));
            $fullname = $user->getFirstname()." ".$user->getLastname();
            $opportunities = $repository1->findBy(array('ownedcompany' => $user->getCompanyname(),'status'=> 'Active'));
            foreach ($opportunities as $opportunity) {
                $ownedUser = $repository->findOneBy(array('username' => $opportunity->getUsername()));
                        $ownedUserfullname = $ownedUser->getFirstname()." ".$ownedUser->getLastname();
                        $opportunity->setOwnerfullname($ownedUserfullname);
                        $stage = $repository2->findOneBy(array('id' => $opportunity->getStage()));
                        if($stage){
                            $opportunity->setChanceofsale($stage->getSalechance());
                            $opportunity->setStage($stage->getName());
                        }
                        if($opportunity->getStage() == '6'){
                            $opportunity->setChanceofsale('100');
                        }
                        if($opportunity->getStage() == '7'){
                            $opportunity->setChanceofsale('0');
                        }
                        $accounttype = $repository3->findOneBy(array('id' => $opportunity->getAccounttype()));
                        if($accounttype){
                            $opportunity->setAccounttype($accounttype->getName());
                        }
                        
                        $producttype = $repository4->findOneBy(array('id' => $opportunity->getProducttype()));
                        if($producttype){
                            $opportunity->setProducttype($producttype->getName());
                        }
                        
                        $opportunitysource = $repository5->findOneBy(array('id' => $opportunity->getOpportunitysource()));
                        if($opportunitysource){
                            $opportunity->setOpportunitysource($opportunitysource->getName());
                        }
                        
                                
                        $sharinguserstring = $opportunity->getSharing();
                        $sharedusers = explode(":",$sharinguserstring);
                        $sharedPercentage = 0;
                        $individualforecast = -1;
                    
                    if($sharinguserstring != ''){
                
                        foreach ($sharedusers as $shareduser){

                           $sharingUser = $repository->findOneBy(array('username' => $shareduser));
                           $sharedPercentage += $sharingUser->getCommissionnonoriginator();


                        }

                        if($opportunity->getUsername()== $token->getUsername()){
                            if(($sharedPercentage + $user->getCommissionoriginator()) >= 100 ){
                                $individualforecast = (str_replace(",", "", $opportunity->getForecast())* $user->getCommissionoriginator())/100;
                                //$individualforecast = 1200;
                                $decimalCount = explode(".", $individualforecast);
                                //echo count($decimalCount);
                                //exit;
                                if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }

                            }else{
                                $individualforecast = (str_replace(",", "", $opportunity->getForecast()) *  ($user->getCommissionoriginator()+ (100 - ($sharedPercentage + $user->getCommissionoriginator()))))/100;
                                $decimalCount = explode(".", $individualforecast);
                                if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }
                            }
                        }else if(in_array($token->getUsername(), $sharedusers)){
                            if(($sharedPercentage + $ownedUser->getCommissionoriginator()) > 100 ){
                                 $individualforecast = (str_replace(",", "", $opportunity->getForecast()) * ($user->getCommissionnonoriginator()- ((($sharedPercentage + $ownedUser->getCommissionoriginator())- 100 )/count($sharedusers))))/100;
                                 $decimalCount = explode(".", $individualforecast);
                                 if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }
                            }else{
                                $individualforecast = (str_replace(",", "", $opportunity->getForecast()) * $user->getCommissionnonoriginator())/100; 
                                $decimalCount = explode(".", $individualforecast);
                                 if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }
                            }
                        }
                    }    
                    $opportunity->setCurrentuserforecast($individualforecast);
            }
            
            
             return $this->render('OpportunityBundle:Default:manageOpportunity.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(),'opportunities'=>$opportunities,'fullname'=>$fullname,'manageview'=>$user->getOpportunityview() )); 
        }else{
            
             return $this->render('LoginLoginBundle:Default:signIn.html.twig', array('errormsg' => 'Please Login your account before you proceed.'));
        }
    }
    
    public function updateopportunityAction(Request $request){
        
        $token = $request->getSession()->get('token');
        if($token && $request->getMethod() == 'POST'){
            $em = $this->getDoctrine()->getManager();
              
            $repository1 = $em->getRepository("OpportunityBundle:Opportunities");
            $id = $request->get('id');
            $opportunitie = $repository1->findOneBy(array('id' => $id));
            $opportunitie->setPersonname($request->get('personname'));
                $opportunitie->setOrganizationname($request->get('organizationname'));
                $opportunitie->setProjectedrevenue($request->get('projectedrevenue'));
                $opportunitie->setAccounttype($request->get('accounttype'));
                $opportunitie->setStage($request->get('stage'));
                $opportunitie->setProducttype($request->get('producttype'));
                $opportunitie->setOpportunitysource($request->get('opportunitysource'));
                $opportunitie->setNotes($request->get('notes'));
                $opportunitie->setVisibility($request->get('visibility'));
                $opportunitie->setCloseddate($request->get('closeddate'));
                 $opportunitie->setForecast($request->get('forecast'));
                 $opportunitie->setRevenue($request->get('revenue'));
                  $opportunitie->setReason($request->get('reason'));
                  $opportunitie->setUserrevenue($request->get('userrevenue'));
                   $sharingusers = '';
                $colonFlag = true;
                if($request->get('sharingusers') != ''){
                    foreach ($request->get('sharingusers') as $sharinguser) {
                        if(!$colonFlag){
                            $sharingusers .= ':';
                        }
                        $sharingusers .= $sharinguser ;
                        $colonFlag = false;
                    }
                }
                $opportunitie->setSharing($sharingusers);
            try{
                $em->flush();
                $repository = $em->getRepository("LoginLoginBundle:Users");
                $repository2 = $em->getRepository("SettingsBundle:Stages");
            $repository3 = $em->getRepository("SettingsBundle:Accounttypes");
            $repository4 = $em->getRepository("SettingsBundle:Producttypes");
            $repository5 = $em->getRepository("SettingsBundle:Opportunitysources");
            
            $user = $repository->findOneBy(array('username' => $token->getUsername()));
            $fullname = $user->getFirstname()." ".$user->getLastname();
            $opportunities = $repository1->findBy(array('ownedcompany' => $user->getCompanyname(),'status'=> 'Active'));
            foreach ($opportunities as $opportunity) {
                $ownedUser = $repository->findOneBy(array('username' => $opportunity->getUsername()));
                        $ownedUserfullname = $ownedUser->getFirstname()." ".$ownedUser->getLastname();
                        $opportunity->setOwnerfullname($ownedUserfullname);
                        $stage = $repository2->findOneBy(array('id' => $opportunity->getStage()));
                        if($stage){
                            $opportunity->setChanceofsale($stage->getSalechance());
                            $opportunity->setStage($stage->getName());
                        }
                        if($opportunity->getStage() == '6'){
                            $opportunity->setChanceofsale('100');
                        }
                        if($opportunity->getStage() == '7'){
                            $opportunity->setChanceofsale('0');
                        }
                        $accounttype = $repository3->findOneBy(array('id' => $opportunity->getAccounttype()));
                        if($accounttype){
                            $opportunity->setAccounttype($accounttype->getName());
                        }
                        
                        $producttype = $repository4->findOneBy(array('id' => $opportunity->getProducttype()));
                        if($producttype){
                            $opportunity->setProducttype($producttype->getName());
                        }
                        
                        $opportunitysource = $repository5->findOneBy(array('id' => $opportunity->getOpportunitysource()));
                        if($opportunitysource){
                            $opportunity->setOpportunitysource($opportunitysource->getName());
                        }
                        
                                
                        $sharinguserstring = $opportunity->getSharing();
                        $sharedusers = explode(":",$sharinguserstring);
                        $sharedPercentage = 0;
                        $individualforecast = -1;
                    
                    if($sharinguserstring != ''){
                
                        foreach ($sharedusers as $shareduser){

                           $sharingUser = $repository->findOneBy(array('username' => $shareduser));
                           $sharedPercentage += $sharingUser->getCommissionnonoriginator();


                        }

                        if($opportunity->getUsername()== $token->getUsername()){
                            if(($sharedPercentage + $user->getCommissionoriginator()) >= 100 ){
                                $individualforecast = (str_replace(",", "", $opportunity->getForecast())* $user->getCommissionoriginator())/100;
                                //$individualforecast = 1200;
                                $decimalCount = explode(".", $individualforecast);
                                //echo count($decimalCount);
                                //exit;
                                if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }

                            }else{
                                $individualforecast = (str_replace(",", "", $opportunity->getForecast()) *  ($user->getCommissionoriginator()+ (100 - ($sharedPercentage + $user->getCommissionoriginator()))))/100;
                                $decimalCount = explode(".", $individualforecast);
                                if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }
                            }
                        }else if(in_array($token->getUsername(), $sharedusers)){
                            if(($sharedPercentage + $ownedUser->getCommissionoriginator()) > 100 ){
                                 $individualforecast = (str_replace(",", "", $opportunity->getForecast()) * ($user->getCommissionnonoriginator()- ((($sharedPercentage + $ownedUser->getCommissionoriginator())- 100 )/count($sharedusers))))/100;
                                 $decimalCount = explode(".", $individualforecast);
                                 if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }
                            }else{
                                $individualforecast = (str_replace(",", "", $opportunity->getForecast()) * $user->getCommissionnonoriginator())/100; 
                                $decimalCount = explode(".", $individualforecast);
                                 if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }
                            }
                        }
                    }    
                    $opportunity->setCurrentuserforecast($individualforecast);
                }
            
                return $this->render('OpportunityBundle:Default:manageOpportunity.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(),'fullname'=>$fullname,'successmsg' => "Well done ! You successfully update an Opportunity ",'opportunities'=>$opportunities,'manageview'=>$user->getOpportunityview()));
              
                
            }catch(Doctrine\ORM\ORMInvalidArgumentException $e){  
                $repository = $em->getRepository("LoginLoginBundle:Users");
                    $repository5 = $em->getRepository("SettingsBundle:Accounttypes");
                    $repository2 = $em->getRepository("SettingsBundle:Stages");
                    $repository3 = $em->getRepository("SettingsBundle:Producttypes");
                    $repository4 = $em->getRepository("SettingsBundle:Opportunitysources");
                    

                    $user = $repository->findOneBy(array('username' => $token->getUsername()));
                    $fullname = $user->getFirstname()." ".$user->getLastname();
                    $accounttypes = $repository5->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
                    $stages = $repository2->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
                    $producttypes = $repository3->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
                    $opportunitysources = $repository4->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
                    $currentUser = $repository->findOneBy(array('username' => $token->getUsername()));
                    $currentCompany = $currentUser->getCompanyname();
                    $users = $repository->findBy(array('companyname' => $currentCompany));
                    return $this->render('OpportunityBundle:Default:editOpportunity.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(),'fullname'=>$fullname,'errormsg' => 'Something went wrong. Try Again','opportunity'=> $opportunity,'accounttypes'=>$accounttypes ,'stages'=>$stages,'producttypes'=>$producttypes,'opportunitysources'=>$opportunitysources,'users'=>$users));  
              
            }    
               
                    
            
            
        }else{
            
             return $this->render('LoginLoginBundle:Default:signIn.html.twig', array('errormsg' => 'You need admin login to proceed.'));
        }
    }
    
    public function deleteopportunityAction(Request $request,$id){
         $token = $request->getSession()->get('token');
        if($token){
              $em = $this->getDoctrine()->getManager();
              
               $repository1 = $em->getRepository("OpportunityBundle:Opportunities");
               $opportunitie = $repository1->findOneBy(array('id' => $id));
               $opportunitie->setStatus("Inactive");
               try{

                    $em->flush();
                    $repository = $em->getRepository("LoginLoginBundle:Users");
                    $repository2 = $em->getRepository("SettingsBundle:Stages");
            $repository3 = $em->getRepository("SettingsBundle:Accounttypes");
            $repository4 = $em->getRepository("SettingsBundle:Producttypes");
            $repository5 = $em->getRepository("SettingsBundle:Opportunitysources");
            
            $user = $repository->findOneBy(array('username' => $token->getUsername()));
            $fullname = $user->getFirstname()." ".$user->getLastname();
            $opportunities = $repository1->findBy(array('ownedcompany' => $user->getCompanyname(),'status'=> 'Active'));
            foreach ($opportunities as $opportunity) {
                $ownedUser = $repository->findOneBy(array('username' => $opportunity->getUsername()));
                        $ownedUserfullname = $ownedUser->getFirstname()." ".$ownedUser->getLastname();
                        $opportunity->setOwnerfullname($ownedUserfullname);
                        $stage = $repository2->findOneBy(array('id' => $opportunity->getStage()));
                        if($stage){
                            $opportunity->setChanceofsale($stage->getSalechance());
                            $opportunity->setStage($stage->getName());
                        }
                        if($opportunity->getStage() == '6'){
                            $opportunity->setChanceofsale('100');
                        }
                        if($opportunity->getStage() == '7'){
                            $opportunity->setChanceofsale('0');
                        }
                        $accounttype = $repository3->findOneBy(array('id' => $opportunity->getAccounttype()));
                        if($accounttype){
                            $opportunity->setAccounttype($accounttype->getName());
                        }
                        
                        $producttype = $repository4->findOneBy(array('id' => $opportunity->getProducttype()));
                        if($producttype){
                            $opportunity->setProducttype($producttype->getName());
                        }
                        
                        $opportunitysource = $repository5->findOneBy(array('id' => $opportunity->getOpportunitysource()));
                        if($opportunitysource){
                            $opportunity->setOpportunitysource($opportunitysource->getName());
                        }
                        
                                
                        $sharinguserstring = $opportunity->getSharing();
                        $sharedusers = explode(":",$sharinguserstring);
                        $sharedPercentage = 0;
                        $individualforecast = -1;
                    
                    if($sharinguserstring != ''){
                
                        foreach ($sharedusers as $shareduser){

                           $sharingUser = $repository->findOneBy(array('username' => $shareduser));
                           $sharedPercentage += $sharingUser->getCommissionnonoriginator();


                        }

                        if($opportunity->getUsername()== $token->getUsername()){
                            if(($sharedPercentage + $user->getCommissionoriginator()) >= 100 ){
                                $individualforecast = (str_replace(",", "", $opportunity->getForecast())* $user->getCommissionoriginator())/100;
                                //$individualforecast = 1200;
                                $decimalCount = explode(".", $individualforecast);
                                //echo count($decimalCount);
                                //exit;
                                if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }

                            }else{
                                $individualforecast = (str_replace(",", "", $opportunity->getForecast()) *  ($user->getCommissionoriginator()+ (100 - ($sharedPercentage + $user->getCommissionoriginator()))))/100;
                                $decimalCount = explode(".", $individualforecast);
                                if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }
                            }
                        }else if(in_array($token->getUsername(), $sharedusers)){
                            if(($sharedPercentage + $ownedUser->getCommissionoriginator()) > 100 ){
                                 $individualforecast = (str_replace(",", "", $opportunity->getForecast()) * ($user->getCommissionnonoriginator()- ((($sharedPercentage + $ownedUser->getCommissionoriginator())- 100 )/count($sharedusers))))/100;
                                 $decimalCount = explode(".", $individualforecast);
                                 if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }
                            }else{
                                $individualforecast = (str_replace(",", "", $opportunity->getForecast()) * $user->getCommissionnonoriginator())/100; 
                                $decimalCount = explode(".", $individualforecast);
                                 if(count($decimalCount)>1){
                                    $individualforecast = number_format(floor($individualforecast),  0).'.'.$decimalCount[1];
                                }else{
                                    $individualforecast = number_format($individualforecast,  0);
                                }
                            }
                        }
                    }    
                    $opportunity->setCurrentuserforecast($individualforecast);
                    }

                    return $this->render('OpportunityBundle:Default:manageOpportunity.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(),'fullname'=>$fullname,'successmsg' => "Well done ! You successfully delete an Opportunity ",'opportunities'=>$opportunities,'manageview'=>$user->getOpportunityview() ));
              
                } catch(Doctrine\ORM\ORMInvalidArgumentException $e){
                   $repository = $em->getRepository("LoginLoginBundle:Users");
                    $repository5 = $em->getRepository("SettingsBundle:Accounttypes");
                    $repository2 = $em->getRepository("SettingsBundle:Stages");
                    $repository3 = $em->getRepository("SettingsBundle:Producttypes");
                    $repository4 = $em->getRepository("SettingsBundle:Opportunitysources");
                    

                    $user = $repository->findOneBy(array('username' => $token->getUsername()));
                     $fullname = $user->getFirstname()." ".$user->getLastname();
                    $accounttypes = $repository5->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
                    $stages = $repository2->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
                    $producttypes = $repository3->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
                    $opportunitysources = $repository4->findBy(array('companyname' =>  $user->getCompanyname(),'status'=> 'Active'));
                    $currentUser = $repository->findOneBy(array('username' => $token->getUsername()));
                    $currentCompany = $currentUser->getCompanyname();
                    $users = $repository->findBy(array('companyname' => $currentCompany));
                    return $this->render('OpportunityBundle:Default:editOpportunity.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(),'fullname'=>$fullname,'errormsg' => 'Something went wrong. Try Again','opportunity'=> $opportunity,'accounttypes'=>$accounttypes ,'stages'=>$stages,'producttypes'=>$producttypes,'opportunitysources'=>$opportunitysources,'users'=>$users));  
              }
            
        }else{
            
             return $this->render('LoginLoginBundle:Default:signIn.html.twig', array('errormsg' => 'Please Login your account before you proceed.'));
        }
    }
    
    
}