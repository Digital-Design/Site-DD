<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\ContactType;
use AppBundle\Entity\Contact;

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
            $message = \Swift_Message::newInstance()
              ->setSubject('Contact depuis votre site')
              ->setFrom('contact@isenclub.fr')
              ->setTo('digitaldesign.isen@gmail.com')
              ->setBody(
                $this->renderView(
                  // app/Resources/views/emails/contact.html.twig
                  'emails/contact.html.twig',
                    array('contact' => $contact)
                  ),
                'text/html'
              );
            //envoi du mail
            $this->get('mailer')->send($message);
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
}
