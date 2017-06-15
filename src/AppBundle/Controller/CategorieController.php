<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategorieController extends Controller {

    /**
     * @Route("/categorie", name="categorieList")
     */
    public function categorieListAction() {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository("AppBundle:Categorie")
                ->findAll();
        //dump($events);die;
        return $this->render('AppBundle:Categorie:categorie_list.html.twig', [
                    "categories" => $categories
        ]);
    }

    /**
     * @Route("/categorie/{id}", name="categorieDetail")
     */
    public function categorieDetailAction($id) {
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository("AppBundle:Categorie")
                ->find($id);
        return $this->render('AppBundle:Categorie:categorie_detail.html.twig', [
                    "categorie" => $categorie
        ]);
    }

}
