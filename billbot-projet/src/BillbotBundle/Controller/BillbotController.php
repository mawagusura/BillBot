<?php

namespace BillbotBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;

class BillbotController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        return $this->render('BillbotBundle:Billbot:index.html.twig');
    }

    /**
     * @Route("/projet", name="projet")
     */
    public function projetAction(Request $request){
        $form = $this->createFormBuilder()
            ->add('Fichier', FileType::class, array('attr' => array('class' => 'form-control-file'), 'label' => 'Envoyer un fichier'))
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $dir = $this->getParameter('file_directory');
            $file = $form->get('Fichier')->getData();
            $name = $file->getClientOriginalName();

            $file->move($dir, $name);

            //Partie CommandLine

            $dir = realpath($dir);
            $dir = dirname($dir);
            $dir = $dir.'\files';
            $cmd = $dir.realpath('/').$name;

            exec($cmd);

            //return $this->redirect($this->generateUrl('home'));
        }

    	return $this->render('BillbotBundle:Billbot:projet.html.twig', array(
            'form' => $form->createView(),
            ));


    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction()
    {
        return $this->render('BillbotBundle:Billbot:about.html.twig');
    }

}
