<?php

namespace App\Controller;

use App\Entity\Tarification;
use App\Form\TarificationType;
use App\Repository\TarificationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tarification")
 * @SuppressWarnings(PHPMD.LongVariable)
 */
class TarificationController extends AbstractController
{
    /**
     * @Route("/", name="tarification_index", methods={"GET"})
     */
    public function index(TarificationRepository $tarificationRepository): Response
    {
        return $this->render('tarification/index.html.twig', [
            'tarifications' => $tarificationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="tarification_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $tarification = new Tarification();
        $form = $this->createForm(TarificationType::class, $tarification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tarification);
            $entityManager->flush();

            return $this->redirectToRoute('tarification_index');
        }

        return $this->render('tarification/new.html.twig', [
            'tarification' => $tarification,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tarification_show", methods={"GET"})
     */
    public function show(Tarification $tarification): Response
    {
        return $this->render('tarification/show.html.twig', [
            'tarification' => $tarification,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tarification_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Tarification $tarification): Response
    {
        $form = $this->createForm(TarificationType::class, $tarification);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tarification_index');
        }

        return $this->render('tarification/edit.html.twig', [
            'tarification' => $tarification,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tarification_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Tarification $tarification): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tarification->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tarification);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tarification_index');
    }
}
