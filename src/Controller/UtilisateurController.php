<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Entity\Article;
use App\Entity\UtilisateurArticle;
use App\Enum\StatutDemande;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/utilisateurs')]
class UtilisateurController extends AbstractController
{
    // ✅ Afficher la liste des utilisateurs
    #[Route('/', name: 'utilisateur_liste', methods: ['GET'])]
    #[IsGranted('ROLE_ADMIN')]
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        $utilisateurs = $utilisateurRepository->findAll();

        return $this->render('utilisateur/liste.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
    }

    //  Créer un utilisateur
    #[Route('/create', name: 'utilisateur_create', methods: ['GET', 'POST'])]
    public function create(
        Request $request,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        UtilisateurRepository $utilisateurRepository
    ): Response {
        // Si la requête est une requête GET, afficher le formulaire
        if ($request->isMethod('GET')) {
            return $this->render('utilisateur/inscription.html.twig');
        }

        // Si la requête est une requête POST, traiter les données du formulaire
        $data = $request->request->all();

        $nom = $data['nom'] ?? null;
        $prenom = $data['prenom'] ?? null;
        $pseudo = $data['pseudo'] ?? null;
        $email = $data['email'] ?? null;
        $telephone = $data['telephone'] ?? null;
        $password = $data['password'] ?? null;
        $roleChoisi = $data['role'] ?? 'ROLE_DONNEUR';

        // Validation des champs obligatoires
        if (!$nom || !$prenom || !$email || !$pseudo || !$password || !$telephone) {
            $this->addFlash('error', 'Tous les champs sont obligatoires.');
            return $this->redirectToRoute('utilisateur_create');
        }

        // Validation du mot de passe
        $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*\W).{12,}$/';
if (!preg_match($pattern, $password)) {
    $this->addFlash('error', 'Le mot de passe doit contenir au moins 12 caractères 
                             et inclure des minuscules, majuscules, chiffres et caractères spéciaux.');
    return $this->redirectToRoute('utilisateur_create');
}

        // Vérification si l'email ou le pseudo existent déjà
        if ($utilisateurRepository->findOneBy(['email' => $email])) {
            $this->addFlash('error', 'Cet email est déjà utilisé.');
            return $this->redirectToRoute('utilisateur_create');
        }

        if ($utilisateurRepository->findOneBy(['pseudo' => $pseudo])) {
            $this->addFlash('error', 'Ce pseudo est déjà pris.');
            return $this->redirectToRoute('utilisateur_create');
        }

        // Création de l'utilisateur
        $utilisateur = new Utilisateur();
        $utilisateur->setNom($nom)
            ->setPrenom($prenom)
            ->setPseudo($pseudo)
            ->setEmail($email)
            ->setTelephone($telephone)
            ->setPassword($passwordHasher->hashPassword($utilisateur, $password))
            ->setRoles([$roleChoisi]);

        // Enregistrement dans la base de données
        $entityManager->persist($utilisateur);
        $entityManager->flush();

        // Message de succès
        $this->addFlash('success', 'Utilisateur créé avec succès.');
        return $this->redirectToRoute('accueil');
    }

    #[Route('/{id}/modifier', name: 'utilisateur_modifier', methods: ['GET', 'POST'])]
    public function modifier(
        Request $request,
        Utilisateur $utilisateur,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $utilisateurConnecte = $this->getUser();
    
        if (!$utilisateurConnecte) {
            $this->addFlash('danger', 'Vous devez être connecté pour modifier un profil.');
            return $this->redirectToRoute('app_login');
        }
    
        // Vérifie si l'utilisateur connecté est admin ou s'il modifie son propre profil
        $estAdmin = in_array('ROLE_ADMIN', $utilisateurConnecte->getRoles(), true);
        $modificationPropreProfil = ($utilisateurConnecte === $utilisateur);
    
        if ($request->isMethod('GET')) {
            return $this->render('utilisateur/modifier.html.twig', [
                'utilisateur' => $utilisateur,
            ]);
        }
    
        $data = $request->request->all();
    
        $utilisateur->setNom($data['nom'] ?? $utilisateur->getNom())
            ->setPrenom($data['prenom'] ?? $utilisateur->getPrenom())
            ->setPseudo($data['pseudo'] ?? $utilisateur->getPseudo())
            ->setEmail($data['email'] ?? $utilisateur->getEmail())
            ->setTelephone($data['telephone'] ?? $utilisateur->getTelephone());
    
        if (!empty($data['password'])) {
            $utilisateur->setPassword($passwordHasher->hashPassword($utilisateur, $data['password']));
        }
    
        $entityManager->flush();
    
        $this->addFlash('success', 'Utilisateur modifié avec succès.');
    
        if ($modificationPropreProfil) {
            return $this->redirectToRoute('utilisateur_profil');
        } elseif ($estAdmin) {
            return $this->redirectToRoute('utilisateur_liste');
        }
    
        return $this->redirectToRoute('accueil'); // Redirection par défaut si nécessaire
    }
    
    #[Route('/{id}/delete', name: 'utilisateur_delete', methods: ['POST'])]
    public function delete(Utilisateur $utilisateur, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($utilisateur);
        $entityManager->flush();

        $this->addFlash('success', 'Utilisateur supprimé avec succès.');
        return $this->redirectToRoute('utilisateur_liste');
    }
    #[Route('/profil', name: 'utilisateur_profil')]
    public function profil(EntityManagerInterface $em): Response
    {
        $utilisateur = $this->getUser();
    
        if (!$utilisateur) {
            $this->addFlash('danger', 'Vous devez être connecté pour accéder à votre profil.');
            return $this->redirectToRoute('app_login');
        }
    
        // 🔹Récupérer les articles publiés par le donneur
        $articlesPublies = $em->getRepository(Article::class)->findBy(['utilisateur' => $utilisateur]);
    
        //  Récupérer les articles réservés
        $articlesReserves = $em->getRepository(Article::class)->findBy(['statut' => 'reserve']);
    
        //  Récupérer les articles en attente de confirmation
        $articlesDemandes = $em->getRepository(UtilisateurArticle::class)->findBy(['statut' => StatutDemande::EN_COURS]);
    
        return $this->render('utilisateur/profil.html.twig', [
            'utilisateur' => $utilisateur,
            'articlesPublies' => $articlesPublies,
            'articlesReserves' => $articlesReserves,
            'articlesDemandes' => $articlesDemandes,
         
        ]);
    }

    
    

}
