<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/loisirs', name: 'app_loisirs')]
    public function home(): Response
    {
        return $this->render('blog/loisirs.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    
    #[Route('/cv', name: 'app_cv')]
    public function CV(): Response
    {
        return $this->render('blog/cv.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    
}
