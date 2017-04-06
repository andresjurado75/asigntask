<?php

namespace SafetyBundle\Controller;

use EntityBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EntityBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function registerAction(Request $request)
    {
        $user = new User();
        $form = $this->formCreate($user);
        $form->handleRequest($request);
        if ($form->isValid()) {
//            $psw = $form->get("password")->getData();
//            $encoder = $this->container->get("security.password_encoder");
//            $encoded = $encoder->encodePassword($user, $psw);
//            $user->setPassword($encoded);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->get('session')->getFlashBag()->set("registerAction", "Registro con Éxito");
            return $this->redirectToRoute("safety_homepage");
        }
        return $this->render('SafetyBundle:Default:register.html.twig', array('form' => $form->createView()));
    }

    public function formCreate($entity)
    {
        $form = $this->createForm(new UserType, $entity);
        return $form;
    }
}
