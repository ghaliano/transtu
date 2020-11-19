<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Path;
use App\Entity\Station;
use App\Form\SearchPathType ;

class DefaultController extends AbstractController{
    /**
     * @Route("/")
     */
public function index ( Request $request ){

    $form = $this->createForm(SearchPathType::class, null, [ 'method' => 'get' ]);
    $form->handleRequest($request);

    if ($form->isSubmitted()) {
        $startStation = $this->getDoctrine()
        ->getRepository(Station::class)
        ->find($request->get('start_station'));

        $endStation = $this->getDoctrine()
        ->getRepository(Station::class)
        ->find($request->get('end_station'));

        $engines = $this->getDoctrine()
        ->getRepository(Path::class)->getPath($startStation, $endStation);

    }else{

        $engines = [] ;
        $startStation = null ;
        $endStation = null ;

    }

    return $this->render('default/index.html.twig', [
        'engines' => $engines,
        'startStation' => $startStation,
        'endStation' => $endStation,
        'formSearch' => $form->createView()
    ]);
}
    

}
