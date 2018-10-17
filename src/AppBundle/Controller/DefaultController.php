<?php

namespace AppBundle\Controller;

set_include_path('/home/virgile/Documents/Site-DD-master');

require 'vendor/autoload.php';

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\ContactType;
use AppBundle\Entity\Contact;
use AppBundle\Entity\Projet;
use AppBundle\Entity\Type;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use \DateTime;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        return $this->render('index.html.twig', array());
    }

    /**
     * @Route("/projets", name="projets")
     */
    public function projetsAction()
    {
        $projets = $this->getDoctrine()->getRepository('AppBundle:Projet')->findBy(array(), array('date' => 'DESC'));
        return $this->render('projets.html.twig', array('projets' => $projets));
    }

    /**
     * @Route("/tuto", name="tutoriels")
     */
    public function tutorielsAction()
    {
        $tutos = $this->getDoctrine()->getRepository('AppBundle:Tuto')->findBy(array(), array('date' => 'DESC'));
        return $this->render('tuto.html.twig', array('tutos' => $tutos));
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted()){
          if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            //creation du mail
            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                //Server settings
                //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com;smtp-relay.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'virgile.prin@gmail.com';                 // SMTP username
                $mail->Password = 'leconquetDU29';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to

                //Recipients
                $mail->setFrom('testclubdigital@gmail.com', 'club');
                $mail->addAddress('testclubdigital@gmail.com', 'club');     // Add a recipient

                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Here is the subject';
                $mail->Body  = utf8_decode($this->renderView('emails/contact.html.twig',array('contact' => $contact)));

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            }
            return $this->render('contact.html.twig', array('form' => $form->createView(), 'valide' => true));
          }else{
            return $this->render('contact.html.twig', array('form' => $form->createView(), 'valide' => false));
          }
        }
        return $this->render('contact.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/promotions", name="promotions")
     */
    public function promotionsAction()
    {
        $promotions = $this->getDoctrine()->getRepository('AppBundle:Promotion')->findAll();
        return $this->render('promotions.html.twig', array('promotions' => $promotions));
    }

    public function mailAction()
    {
      

      return $this->render('projets.html.twig', array('projets' => $projets));
    }

    
    /**
     * @Route("/addProjet/{title}/{description}", name="addProjet")
     */
    public function addProjet($title,$description)
    {
        $projet = new Projet();
        $type = new Type();

        $objDateTime = new DateTime('NOW');

        $projet->setType($type->getType("Site"));
        $projet->setTitre($title);
        $projet->setDescription($description);
        $projet->setDate($objDateTime);
        $projet->setActive(0);
        $projet->setFini(0);
        $em = $this->getDoctrine()->getManager();
        $em->persist($projet);
        $em->flush($projet);
    
        return $this->render('index.html.twig', array());
    }

}
