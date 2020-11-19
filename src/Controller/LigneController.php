<?php

namespace App\Controller;

use App\Entity\Ligne;
use App\Form\LigneType;
use App\Form\SearchType;
use App\Repository\LigneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ligne")
 */
class LigneController extends AbstractController
{
    /**
     * @Route("/", name="ligne_index", methods={"GET"})
     */
    public function index(LigneRepository $ligneRepository, Request $request): Response
    {
       
        $ligne = new Ligne();
        $form = $this->createForm(SearchType::class, $ligne);
        $form->handleRequest($request);

        return $this->render('ligne/index.html.twig', [
            'lignes' => $ligneRepository->Search($ligne),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/new", name="ligne_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $ligne = new Ligne();
        $form = $this->createForm(LigneType::class, $ligne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ligne);
            $entityManager->flush();

            return $this->redirectToRoute('ligne_index');
        }

        return $this->render('ligne/new.html.twig', [
            'ligne' => $ligne,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ligne_show", methods={"GET"})
     */
    public function show(Ligne $ligne): Response
    {
        return $this->render('ligne/show.html.twig', [
            'ligne' => $ligne,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="ligne_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Ligne $ligne): Response
    {
        $form = $this->createForm(LigneType::class, $ligne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ligne_index');
        }

        return $this->render('ligne/edit.html.twig', [
            'ligne' => $ligne,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="ligne_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Ligne $ligne): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ligne->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ligne);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ligne_index');
    }
}
