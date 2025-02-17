<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UtilisateurControllerTest extends WebTestCase
{
    public function testVoirHTMLInscription()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/utilisateurs/create');


        if (!$crawler->filter('#form-inscription')->count()) {
            dump($crawler->html());
            exit();
        }
        $this->assertResponseIsSuccessful();
    }

    public function testAffichageFormulaireInscription()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/utilisateurs/create');

        $this->assertResponseIsSuccessful();

      
        $this->assertSelectorExists('#form-inscription', " Le formulaire d'inscription est introuvable.");
        $this->assertSelectorExists('input[name="nom"]', "Champ 'nom' introuvable");
        $this->assertSelectorExists('input[name="prenom"]', "Champ 'prenom' introuvable");
        $this->assertSelectorExists('input[name="email"]', "Champ 'email' introuvable");
        $this->assertSelectorExists('input[name="pseudo"]', "Champ 'pseudo' introuvable");
        $this->assertSelectorExists('input[name="telephone"]', " Champ 'telephone' introuvable");
        $this->assertSelectorExists('input[name="password"]', " Champ 'password' introuvable");
        $this->assertSelectorExists('input[type="radio"][name="role"]', "Boutons radio 'role' introuvables");
        $this->assertSelectorExists('button[type="submit"], input[type="submit"]', " Bouton 'S'inscrire' introuvable");
    }

    public function testInscriptionUtilisateur()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/utilisateurs/create');

        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists('#form-inscription', " Le formulaire est introuvable.");

        $uniqueEmail = 'testuser' . uniqid() . '@example.com';
        $uniquePseudo = 'testuser' . uniqid();
       
        $form = $crawler->filter('#form-inscription')->form();
        $form['nom'] = 'Test';
        $form['prenom'] = 'User';
        $form['pseudo'] = $uniquePseudo;
        $form['email'] = $uniqueEmail;
        $form['telephone'] = '0612345678';
        $form['password'] = 'Test@Password123';
        $form['role'] = 'ROLE_RECEVEUR';
        
        $client->submit($form);

        $this->assertResponseRedirects('/accueil');

        $client->followRedirect();

        $flashText = $client->getCrawler()->filter('div.modal-body')->text();
      
        $this->assertStringContainsString('Utilisateur créé avec succès', $flashText);
    }
    
    public function testListerBoutons()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/utilisateurs/create');

        
        $buttons = $crawler->filter('button, input[type="submit"]')->each(function ($node) {
            return trim($node->text());
        });

        $this->assertNotEmpty($buttons, " Aucun bouton trouvé sur la page.");
    }
}
