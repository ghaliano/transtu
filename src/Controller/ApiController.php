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

        $startStation = $this->getDoctrine()
            ->getRepository(Station::class)
            ->find($request->get('start_station'));

        $endStation = $this->getDoctrine()
            ->getRepository(Station::class)
            ->find($request->get('end_station'));

        $engines = $this->getDoctrine()
            ->getRepository(Path::class)->getPath($startStation, $endStation);

        return $this->json($engines);
    }
}
