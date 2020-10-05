<?php

namespace App\Controller;

use App\Repository\EducationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ApiEducationController extends AbstractController
{
    /**
     * @Route("/api/education", name="api_education", methods={"GET"})
     */
    public function getAllEducation(EducationRepository $repository, SerializerInterface $serializer)
    {
        $education = $repository->findAll();
        return $this->json($education, 200, [], ['groups' => 'education:read']);
    }
}
