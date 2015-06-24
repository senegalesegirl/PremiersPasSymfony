<?php

namespace Partieune\MiniblogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Partieune\MiniblogBundle\Entity\Message;


class DefaultController extends Controller
{

    public function indexAction()
    {
        $messages =  $this ->getDoctrine() ->getEntityManager() -> getRepository('PartieuneMiniblogBundle:Message') -> findAll();
        return $this->render('PartieuneMiniblogBundle:Default:index.html.twig', array('messages' => $messages) );
    }

    public function afficherAction($id)
    {
        $lemessage= $this ->getDoctrine() ->getEntityManager()->getRepository('PartieuneMiniblogBundle:Message')->find($id);
        return $this->render('PartieuneMiniblogBundle:Default:afficher.html.twig', array('lemessage' => $lemessage));
    }

    public function ajouterAction()
    {
        //instanciation de l'onjet auquel le formulaire est lié
        $message=new Message();
        return $this->gestionFormulaire($message, 'ajouter');

    }

    public function modifierAction($id)
    {   $mess= $this->getDoctrine()->getEntityManager()->getRepository('PartieuneMiniblogBundle:Message')->find($id);
        return $this->gestionFormulaire($mess,'modifier');

    }

    public function supprimerAction($id)
    {
        $em=$this->getDoctrine()->getEntityManager();
        $tuple=$em->getRepository('PartieuneMiniblogBundle:Message')->find($id);
        $em->remove($tuple);
        $em->flush();

        return $this->redirect($this->generateUrl('partieune_miniblog_homepage'));
    }

    public function afficherAll()
    {
        return $this->render('PartieuneMiniblogBundle:Default:afficherAll.html.twig');
    }


    //µPour factoriser le code
    private function gestionFormulaire($message, $twig) {

        // création du constructeur de formulaire

        $formBuilder = $this->createFormBuilder($message);

        // ajout des champs pour la construction du formulaire

        $formBuilder ->add('ladate', 'date')

                      ->add('titre', 'text')

                       ->add('contenu', 'textarea')

                       ->add('auteur', 'text');

        // génération du formulaire

        $form = $formBuilder->getForm() ;

        // récupération de la requête

        $request = $this->getRequest() ;

        // contrôle de la méthode d'appel de la page

        if ($request->getMethod() == "POST") {

            // hydratation de l'objet

            $form->bind($request) ;

            // contrôle de la validité du formulaire

            if ($form->isValid()) {

                // création de l'entityManager

                $em = $this->getDoctrine()->getEntityManager() ;

                // enregistrement des données

                $em->persist($message) ;

                $em->flush() ;

                // redirection vers la liste des messages

                return $this->redirect( $this->generateUrl('partieune_miniblog_homepage') );

 }

        }

        // envoi du formulaire au template pour l'afficher

        return $this->render('PartieuneMiniblogBundle:Default:'.$twig.'.html.twig',array('form' => $form->createView()));

 }

}
