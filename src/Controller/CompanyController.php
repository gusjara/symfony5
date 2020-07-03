<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CompanyController extends AbstractController
{
    /**
     * @Route("/Company", name="Company")
     */
    public function index()
    {
        return $this->render('Company/index.html.twig', [
            'controller_name' => 'CompanyController',
        ]);
    }
}
