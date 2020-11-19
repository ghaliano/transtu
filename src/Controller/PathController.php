<?php

namespace App\Controller;

use App\Entity\Path;
use App\Form\PathType;
use App\Repository\PathRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/path")
 */
class PathController extends AbstractController
{
    /**
     * @Route("/", name="path_index", methods={"GET"})
     */
    public function index(PathRepository $pathRepository): Response
    {
        return $this->render('path/index.html.twig', [
            'paths' => $pathRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="path_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $path = new Path();
        $form = $this->createForm(PathType::class, $path);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($path);
            $entityManager->flush();

            return $this->redirectToRoute('path_index');
        }

        return $this->render('path/new.html.twig', [
            'path' => $path,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="path_show", methods={"GET"})
     */
    public function show(Path $path): Response
    {
        return $this->render('path/show.html.twig', [
            'path' => $path,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="path_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Path $path): Response
    {
        $form = $this->createForm(PathType::class, $path);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('path_index');
        }

        return $this->render('path/edit.html.twig', [
            'path' => $path,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="path_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Path $path): Response
    {
        if ($this->isCsrfTokenValid('delete'.$path->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($path);
            $entityManager->flush();
        }

        return $this->redirectToRoute('path_index');
    }
}
