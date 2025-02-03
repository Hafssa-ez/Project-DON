<?php

// src/Controller/ContactController.php

namespace App\Controller;

use App\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/saveContact', name: 'contact_submit', methods: ['POST'])]
    public function handleContact(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Récupération des données du formulaire
        $nom = $request->request->get('nom');
        $email = $request->request->get('email');
        $sujet = $request->request->get('sujet');
        $message = $request->request->get('message');

        // Validation simple
        if (empty($nom) || empty($email) || empty($sujet) || empty($message)) {
            $this->addFlash('error', 'Tous les champs sont obligatoires.');
            return $this->redirectToRoute('app_home'); // Retour à l'accueil avec erreur
        }

        // Sauvegarde des données
        $contact = new Contact();
        $contact->setNom($nom);
        $contact->setEmail($email);
        $contact->setSujet($sujet);
        $contact->setMessage($message);

        $entityManager->persist($contact);
        $entityManager->flush();

        // Ajout d'un message flash pour confirmer la réussite
        $this->addFlash('success', 'Votre message a été envoyé avec succès. Nous vous répondrons dès que possible.');

        return $this->redirectToRoute('app_home'); // Retour à l'accueil avec succès
    }
}
