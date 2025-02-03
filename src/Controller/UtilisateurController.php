<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Entity\Role;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;

#[Route('/utilisateurs')]
class UtilisateurController extends AbstractController
{
    // Route pour afficher la liste des utilisateurs
    #[Route('/', name: 'utilisateur_liste', methods: ['GET'])]
    public function index(UtilisateurRepository $utilisateurRepository, Request $request): Response
    {
        $utilisateurs = $utilisateurRepository->findAll();

        if ($request->headers->get('Accept') === 'application/json') {
            return $this->json($utilisateurs, 200, [], [AbstractNormalizer::GROUPS => 'utilisateur:list']);
        }

        return $this->render('utilisateur/liste.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
    }

    // Route pour créer un utilisateur
    #[Route('/create', name: 'utilisateur_create', methods: ['GET', 'POST'])]
    public function create(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        if ($request->isMethod('POST')) {
            $data = $request->isXmlHttpRequest() ? json_decode($request->getContent(), true) : $request->request->all();

            $nom = $data['nom'] ?? null;
            $prenom = $data['prenom'] ?? null;
            $pseudo = $data['pseudo'] ?? null;
            $email = $data['email'] ?? null;
            $telephone = $data['telephone'] ?? null;
            $motPasse = $data['mot_passe'] ?? null;
            $roleNom = $data['role'] ?? 'Donneur';

            if (!$nom || !$prenom || !$email || !$pseudo || !$motPasse || !$telephone) {
                $errorMessage = 'Tous les champs obligatoires doivent être remplis.';
                if ($request->headers->get('Accept') === 'application/json') {
                    return $this->json(['error' => $errorMessage], 400);
                }
                $this->addFlash('error', $errorMessage);
                return $this->redirectToRoute('utilisateur_create');
            }

            $roleRepository = $entityManager->getRepository(Role::class);
            $role = $roleRepository->findOneBy(['nom' => $roleNom]) ?? (new Role())->setNom($roleNom);

            $utilisateur = new Utilisateur();
            $utilisateur->setNom($nom)
                ->setPrenom($prenom)
                ->setPseudo($pseudo)
                ->setEmail($email)
                ->setTelephone($telephone)
                ->setMotPasse($passwordHasher->hashPassword($utilisateur, $motPasse))
                ->setRole($role);

            $entityManager->persist($role);
            $entityManager->persist($utilisateur);
            $entityManager->flush();

            $successMessage = 'Utilisateur créé avec succès.';
            if ($request->headers->get('Accept') === 'application/json') {
                return $this->json(['message' => $successMessage, 'user' => $utilisateur], 201, [], ['groups' => 'utilisateur:detail']);
            }

            $this->addFlash('success', $successMessage);
            return $this->redirectToRoute('utilisateur_liste');
        }

        return $this->render('utilisateur/inscription.html.twig');
    }

    // Route pour modifier un utilisateur
    #[Route('/{id}/modifier', name: 'utilisateur_modifier', methods: ['GET', 'POST'])]
    public function modifier(
        Request $request,
        Utilisateur $utilisateur,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        if ($request->isMethod('POST')) {
            $data = $request->isXmlHttpRequest() ? json_decode($request->getContent(), true) : $request->request->all();

            $utilisateur->setNom($data['nom'] ?? $utilisateur->getNom())
                ->setPrenom($data['prenom'] ?? $utilisateur->getPrenom())
                ->setPseudo($data['pseudo'] ?? $utilisateur->getPseudo())
                ->setEmail($data['email'] ?? $utilisateur->getEmail())
                ->setTelephone($data['telephone'] ?? $utilisateur->getTelephone());

            if (!empty($data['mot_passe'])) {
                $utilisateur->setMotPasse($passwordHasher->hashPassword($utilisateur, $data['mot_passe']));
            }

            $entityManager->flush();

            $successMessage = 'Utilisateur modifié avec succès.';
            if ($request->headers->get('Accept') === 'application/json') {
                return $this->json(['message' => $successMessage, 'user' => $utilisateur], 200, [], ['groups' => 'utilisateur:detail']);
            }

            $this->addFlash('success', $successMessage);
            return $this->redirectToRoute('utilisateur_liste');
        }

        return $this->render('utilisateur/modifier.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    // Route pour supprimer un utilisateur
    #[Route('/{id}/delete', name: 'utilisateur_delete', methods: ['POST'])]
    public function delete(Utilisateur $utilisateur, EntityManagerInterface $entityManager, Request $request): Response
    {
        $entityManager->remove($utilisateur);
        $entityManager->flush();

        $successMessage = 'Utilisateur supprimé avec succès.';
        if ($request->headers->get('Accept') === 'application/json') {
            return $this->json(['message' => $successMessage], 200);
        }

        $this->addFlash('success', $successMessage);
        return $this->redirectToRoute('utilisateur_liste');
    }
}
