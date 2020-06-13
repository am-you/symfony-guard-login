<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function index(Request $request)
    {
        $companies = [
            'Lorem 1' => 'Description 1',
            'Lorem 2' => 'Description 2',
            'Lorem 3' => 'Description 3',
            'Lorem 4' => 'Description 4',
            'Lorem 5' => 'Description 5',
            'Lorem 6' => 'Description 6',
            'Lorem 7' => 'Description 7',
            'Lorem 8' => 'Description 8',
            'Lorem 9' => 'Description 9',
            'Lorem 10' => 'Description 10',
        ];

        return $this->render('list/index.html.twig', [
            'companies' => $companies,
        ]);
    }
}
