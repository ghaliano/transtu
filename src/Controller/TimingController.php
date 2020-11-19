<?php

namespace App\Controller;

use App\Entity\Timing;
use App\Form\TimingType;
use App\Repository\TimingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/timing")
 */
class TimingController extends AbstractController
{
    /**
     * @Route("/", name="timing_index", methods={"GET"})
     */
    public function index(TimingRepository $timingRepository): Response
    {
        return $this->render('timing/index.html.twig', [
            'timings' => $timingRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="timing_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $timing = new Timing();
        $form = $this->createForm(TimingType::class, $timing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($timing);
            $entityManager->flush();

            return $this->redirectToRoute('timing_index');
        }

        return $this->render('timing/new.html.twig', [
            'timing' => $timing,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="timing_show", methods={"GET"})
     */
    public function show(Timing $timing): Response
    {
        return $this->render('timing/show.html.twig', [
            'timing' => $timing,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="timing_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Timing $timing): Response
    {
        $form = $this->createForm(TimingType::class, $timing);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('timing_index');
        }

        return $this->render('timing/edit.html.twig', [
            'timing' => $timing,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="timing_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Timing $timing): Response
    {
        if ($this->isCsrfTokenValid('delete'.$timing->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($timing);
            $entityManager->flush();
        }

        return $this->redirectToRoute('timing_index');
    }
}
