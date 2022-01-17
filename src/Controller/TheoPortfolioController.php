<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TheoPortfolioController extends AbstractController
{
    /**
     * @Route("/", name="theo_portfolio")
     */
    public function index(): Response
    {
        return $this->render('theo_portfolio/index.html.twig', [
            'controller_name' => 'TheoPortfolioController',
        ]);
    }
    /**
     * @Route("/portfolio", name="portfolio")
     */
    public function portfolio(): Response
    {
        return $this->render('theo_portfolio/portfolio.html.twig', [
            'controller_name' => 'TheoPortfolioController',
        ]);
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('theo_portfolio/contact.html.twig', [
            'controller_name' => 'TheoPortfolioController',
        ]);
      
    }
     /**
     * @Route("/cv", name="cv")
     */
    public function cv(): Response
    {
        return $this->render('theo_portfolio/cv.html.twig', [
            'controller_name' => 'TheoPortfolioController',
        ]);
      
    }
     /**
     * @Route("/loisirs", name="loisirs")
     */
    public function loisirs(): Response
    {
        return $this->render('theo_portfolio/loisirs.html.twig', [
            'controller_name' => 'TheoPortfolioController',
        ]);
      
    }
    /**
     * @Route("/projetsr109", name="blog")
     */
    public function blog(): Response
    {
        return $this->render('theo_portfolio/blogr109.html.twig', [
            'controller_name' => 'TheoPortfolioController',
        ]);
      
    }
       /**
     * @Route("/succesful", name="succes")
     */
    public function succesful(): Response
    {
        return $this->render('theo_portfolio/succesful.html.twig', [
            'controller_name' => 'TheoPortfolioController',
        ]);
      
    }
    /**
     * @Route("/nouvelpage", name="nouvelpage")
     */
    public function nouvelpage(): Response
    {
        return $this->render('theo_portfolio/test.html.twig', [
            'controller_name' => 'TheoPortfolioController',
        ]);
      
    }

}
