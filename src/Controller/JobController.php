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
     /**
    * @Route("/menu",name="menu")
    */
    public function menu(): Response
    {
        $mymenu=array(
            ['route'=> 'job' ,'intitulé'=>'Accueil'],
            ['route'=> 'ajouter' ,'intitulé'=>'Ajouter un job'],
            ['route'=> 'list' ,'intitulé'=>'Afficher tous les jobs'],

        );
        return $this->render('job/menu.html.twig', [
           'mymenu' => $mymenu,
            ]);
    }
    /**
    * @Route("/sidebar",name="sidebar")
    */
    public function sidebar(): Response
    {
        $listjobs=array(
            ['id'=> 1 ,'nomjob'=>'Developpeur web'],
            ['id'=> 2 ,'nomjob'=>'Responsable marketing'],
            ['id'=> 3 ,'nomjob'=>'Team leader'],

        );
        return $this->render('job/sidebar.html.twig', [
           'listjobs' => $listjobs,
            ]);
    }
   
}
