<?php

namespace jardin\EnfantsBundle\Controller;

use EnfantsBundle\Entity\Enfants;
use EnfantsBundle\Form\EnfantsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EnfantsBundle:Default:index.html.twig');
    }
    public function ajouterEnfantsAction(Request $request)
    {
        $enfants = new Enfants();
        $form = $this->createForm(enfantsType::class,$enfants);
        $form->HandleRequest($request);

        if($form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enfants);
            $em->flush();

#redirection vers la page d'affichage

            return $this->redirectToRoute('enfants_afficherEnfants');

#

        }

        return $this->render("@Enfants/Default/ajouterEnfants.html.twig",array('form'=>$form->createView()));
    }

    public function afficherEnfantsAction ()
    {
        $em = $this->getDoctrine()->getManager();
        $enfants = $em->getRepository("EnfantsBundle:Enfants")->findAll();
        return $this->render("@Enfants/Default/afficherEnfants.html.twig",array('enfants'=>$enfants));
    }

    public function supprimerEnfantsAction ($id)
    {
        $em = $this->getDoctrine()->getManager();
        $enfants = $em->getRepository("EnfantsBundle:Enfants")->find($id);
        $em->remove($enfants);
        $em->flush();
        return $this->redirectToRoute('enfants_afficherEnfants');
    }
}
