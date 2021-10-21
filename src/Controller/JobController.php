<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    /**
     * @Route("/job", name="job")
     */
    public function index(): Response
    {
        return $this->render('job/index.html.twig', [
            'controller_name' => 'Groupe A',
        ]);
    }

    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil(): Response
    {
        return $this->render('job/accueil.html.twig', [
            'controller_name' => 'Groupe A',
        ]);
    }
    /**
    * @Route("/voir/{id}",name="voir",requirements={"id"="/d+"})
    */
   public function voir(int $id): Response
   {
       return new Response("details de la fonction voir".$id);
      // return $this->render('job/voir.html.twig', [
         //  'controller_name' => 'Groupe A',
      // ]);
   }

    /**
    * @Route("/ajouter",name="ajouter")
    */
    public function ajouter(): Response
    {
        
        return $this->render('job/ajouter.html.twig', [
           'ajout_name' => 'Page ajout',
            ]);
    }
    /**
    * @Route("/modifier/{id}",name="modifier")
    */
    public function modifier($id): Response
    {
        
        return $this->render('job/modifier.html.twig', [
           'modification_name' => 'Page modification',
            ]);
    }

     /**
    * @Route("/list",name="list")
    */
    public function list(): Response
    {
        
        return $this->render('job/list.html.twig', [
           'list_name' => 'Page affichage des jobs',
            ]);
    }
   
}
