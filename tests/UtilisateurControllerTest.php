<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UtilisateurControllerTest extends WebTestCase
{
    /**
     * Vérifie que la page d'inscription est accessible et affiche son HTML en cas d'erreur.
     */
    public function testVoirHTMLInscription()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/utilisateurs/create');

        // Si le formulaire n'est pas trouvé, afficher le HTML pour le debug
        if (!$crawler->filter('#form-inscription')->count()) {
            dump($crawler->html());
            exit();
        }
        $this->assertResponseIsSuccessful();
    }

    /**
     * Vérifie l'affichage du formulaire d'inscription et la présence de tous les champs.
     */
    public function testAffichageFormulaireInscription()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/utilisateurs/create');

        $this->assertResponseIsSuccessful();

        // On utilise l'ID pour cibler le formulaire
        $this->assertSelectorExists('#form-inscription', "❌ Le formulaire d'inscription est introuvable.");

        // Vérifier que les champs importants sont présents
        $this->assertSelectorExists('input[name="nom"]', "❌ Champ 'nom' introuvable");
        $this->assertSelectorExists('input[name="prenom"]', "❌ Champ 'prenom' introuvable");
        $this->assertSelectorExists('input[name="email"]', "❌ Champ 'email' introuvable");
        $this->assertSelectorExists('input[name="pseudo"]', "❌ Champ 'pseudo' introuvable");
        $this->assertSelectorExists('input[name="telephone"]', "❌ Champ 'telephone' introuvable");
        $this->assertSelectorExists('input[name="password"]', "❌ Champ 'password' introuvable");
        $this->assertSelectorExists('input[type="radio"][name="role"]', "❌ Boutons radio 'role' introuvables");
        $this->assertSelectorExists('button[type="submit"], input[type="submit"]', "❌ Bouton 'S'inscrire' introuvable");
    }

    /**
     * Teste l'inscription d'un utilisateur et vérifie la redirection après soumission.
     */
    public function testInscriptionUtilisateur()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/utilisateurs/create');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists('#form-inscription', "❌ Le formulaire est introuvable.");

        // Générer des valeurs uniques pour éviter les doublons
        $uniqueEmail = 'testuser' . uniqid() . '@example.com';
        $uniquePseudo = 'testuser' . uniqid();

        // Récupérer le formulaire via son ID
        $form = $crawler->filter('#form-inscription')->form();

        // Remplir le formulaire
        $form['nom'] = 'Test';
        $form['prenom'] = 'User';
        $form['pseudo'] = $uniquePseudo;
        $form['email'] = $uniqueEmail;
        $form['telephone'] = '0612345678';
        $form['password'] = 'Test@Password123';
        $form['role'] = 'ROLE_RECEVEUR';
        
        // Soumettre le formulaire
        $client->submit($form);

        // Vérifier que la redirection se fait vers '/accueil'
        $this->assertResponseRedirects('/accueil');

        // Suivre la redirection
        $client->followRedirect();

        // Récupérer le texte de la modale qui contient le message flash
        $flashText = $client->getCrawler()->filter('div.modal-body')->text();
        // Vérifier que le message contient la chaîne attendue (adapté selon le message exact)
        $this->assertStringContainsString('Utilisateur créé avec succès', $flashText);
    }

    /**
     * Vérifie la présence des boutons sur la page d'inscription.
     */
    public function testListerBoutons()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/utilisateurs/create');

        // Récupérer tous les boutons présents sur la page
        $buttons = $crawler->filter('button, input[type="submit"]')->each(function ($node) {
            return trim($node->text());
        });

        $this->assertNotEmpty($buttons, "❌ Aucun bouton trouvé sur la page.");
    }
}
