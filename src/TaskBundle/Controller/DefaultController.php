<?php

namespace TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TaskBundle\Entity\Tasks;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TaskBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function savetaskAction(Request $request){
        
        $token = $request->getSession()->get('token');
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("LoginLoginBundle:Users");
        
        if($token && $request->getMethod() == 'POST'){
                $isfrommanagecontact = false;
                $user = $repository->findOneBy(array('username' => $token->getUsername()));
                $name = $request->get('notename');
                $tags = $request->get('tags');
                $note = $request->get('notes');
                $visibility = $request->get('visibility');
                $due = $request->get('due');
                $priority = $request->get('priority');
                $type = $request->get('tasktype');
                $typeid = $request->get('tasktypeid');
                $userfullname = $user->getFirstname()." ".$user->getLastname();
                $assignto = $request->get('assignto');
                if($assignto == ''){
                    $assignto = $userfullname;
                    $isfrommanagecontact = true;
                }
                $tasks = new Tasks();
                $tasks->setName($name);
                $tasks->setUsername($token->getUsername());
                $tasks->setFullname($userfullname);
                $tasks->setCompanyname($user->getCompanyname());
                $tasks->setStatus('Active');
                $tasks->setTags($tags);
                $tasks->setNotes($note);
                $tasks->setVisibility($visibility);
                $tasks->setDue($due);
                $tasks->setPriority($priority);
                $tasks->setTasktype($type);
                $tasks->setTasktypeid($typeid);
                date_default_timezone_set('America/Los_Angeles');
                $tasks->setTimestamp(date("Y-m-d h:i:sa"));
                $tasks->setAssignto($assignto);
             try{  
                $em->persist($tasks);
                $em->flush();
                // if request is from manage contact send the response to manage contact page
                if($isfrommanagecontact){
                    $repository1 = $em->getRepository("LoginLoginBundle:Users");
                    $currentUser = $repository1->findOneBy(array('username' => $token->getUsername()));
                     $fullname = $currentUser->getFirstname()." ".$currentUser->getLastname();
                    $currentCompany = $currentUser->getCompanyname();
                    $repository = $em->getRepository("ContactsContactsBundle:Contacts");
                    $contacts = $repository->findBy(array('ownedcompany' => $currentCompany));
                    $repository2 = $em->getRepository("OpportunityBundle:Opportunities");

                        foreach($contacts as $contact){

                               $currentUser = $repository1->findOneBy(array('username' => $contact->getUsername()));
                               $opportunities = $repository2->findBy(array('personname' => $contact->getName()));
                               $count = 0;
                               $projectedrevenue = 0;
                               $weightedforecast = 0;
                               if($opportunities){

                                   foreach($opportunities as $opportunity){
                                      $count++;
                                      $projectedrevenue += intval(str_replace(',','', $opportunity->getProjectedrevenue()));
                                      $weightedforecast += intval(str_replace(',','', $opportunity->getForecast()));
                                   }

                               }
                               $contact ->setNoofopportunities ($count);
                               $contact ->setProjectedrevenue (number_format($projectedrevenue));
                               $contact ->setWeightedforecast (number_format($weightedforecast));
                               $contact->setFirstname($currentUser->getFirstname());
                               $contact->setLastname($currentUser->getLastname());
                        }
        
        
                    return $this->render('ContactsContactsBundle:Default:manageContact.html.twig', array('name'=>$token->getUsername(),'role' => $token->getRole(),'contacts'=>$contacts,'fullname'=>$fullname,'successmsg' => 'You successfully add a task to the contact'));
       
                }
               
               $repository1 = $em->getRepository("OpportunityBundle:Opportunities");
               $repository2 = $em->getRepository("SettingsBundle:Stages");
            
                $currentuser = $repository->findOneBy(array('username' => $token->getUsername()));
                $opportunities = $repository1->findBy(array('ownedcompany' => $currentuser->getCompanyname()));
                foreach ($opportunities as $opportunity) {
                    $stage = $repository2->findOneBy(array('name' => $opportunity->getStage()));
                    if($stage){
                        $opportunity->setChanceofsale($stage->getSalechance());
                    }
                    if($opportunity->getStage() == 'Won'){
                        $opportunity->setChanceofsale('100');
                    }
                    if($opportunity->getStage() == 'Lost'){
                        $opportunity->setChanceofsale('0');
                    }
                }
            
            
             return $this->render('OpportunityBundle:Default:manageOpportunity.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(),'opportunities'=>$opportunities,'successmsg' => 'You successfully add a task to the opportunity' )); 
        } catch(Doctrine\ORM\ORMInvalidArgumentException $e){
              
                return $this->render('SettingsBundle:Default:addStage.html.twig', array('name' => $token->getUsername(), 'role' => $token->getRole(),'errormsg' => 'Invalid Arguments. Try Again'));  
        }
              
            
        }else{
            
             return $this->render('LoginLoginBundle:Default:signIn.html.twig', array('errormsg' => 'You need admin login to proceed.'));
        }
        
    }
}
