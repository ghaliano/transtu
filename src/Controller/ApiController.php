<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Station;
use App\Entity\Path;

class ApiController extends AbstractController
{
    /**
     * @Route("/api", name="api")
     */
    public function recherche(Request $request): Response
    {

        $engines = $this->getDoctrine()
            ->getRepository(Path::class)->getPath($request->get('start_station'), $request->get('end_station'));

        return $this->json($engines);
    }
}
