<?php

namespace Ingetis\DemandeDocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ingetis\DemandeDocBundle\Entity\DemandeDoc;
use Ingetis\DemandeDocBundle\Form\DemandeDocType;

class DefaultController extends Controller
{
    public function DDDAction()
    {
        $form = $this->createForm(new DemandeDocType());
        $request = $this->getRequest();
        if($request->isMethod('POST')){
            $em = $this->getDoctrine()->getManager();
            $form->handleRequest($request);
            if($form->isValid()){
                $data = $form->getData();
                $em->persist($data);
                $em->flush();
                return $this->render($this->generateUrl('ingetis_demande_doc_DDD'),array(
                    'id' => $data->getId(),
                ));

            }
        }

        return $this->render('IngetisDemandeDocBundle:Default:index.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
