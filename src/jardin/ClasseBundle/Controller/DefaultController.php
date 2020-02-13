<?php

namespace jardin\ClasseBundle\Controller;

use ClasseBundle\Entity\Classe;
use ClasseBundle\Form\ClasseType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('classeBundle:Default:index.html.twig');
    }
    public function ajouterClasseAction(Request $request)
    {
        $classe = new Classe();
        $form = $this->createForm(classeType::class,$classe);
        $form->HandleRequest($request);

        if($form->isSubmitted())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($classe);
            $em->flush();

#redirection vers la page d'affichage

            return $this->redirectToRoute('classe_afficherClasse');

#

        }

        return $this->render("@Classe/Default/ajouterClasse.html.twig",array('form'=>$form->createView()));
    }

    public function afficherClasseAction ()
    {
        $em = $this->getDoctrine()->getManager();
        $classe = $em->getRepository("ClasseBundle:Classe")->findAll();
        return $this->render("@Classe/Default/afficherClasse.html.twig",array('classe'=>$classe));
    }
    public function supprimerClasseAction ($id)
    {
        $em = $this->getDoctrine()->getManager();
        $classe = $em->getRepository("ClasseBundle:Classe")->find($id);
        $em->remove($classe);
        $em->flush();
        return $this->redirectToRoute('classe_afficherClasse');
    }
}
