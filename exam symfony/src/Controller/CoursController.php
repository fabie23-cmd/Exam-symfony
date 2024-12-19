<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CoursController extends AbstractController
{
        public function listCours(EntityManagerInterface $em)
    {
        $cours = $em->getRepository(Cours::class)->findAll();
        return $this->render('admin/cours_list.html.twig', [
            'cours' => $cours
        ]);
    }
}