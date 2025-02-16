<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ArticleControllerTest extends WebTestCase
{
    public function testAccueilPageIsSuccessful()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/accueil');

       
        $this->assertResponseIsSuccessful();

        $this->assertSelectorTextContains('h1', 'Donner une seconde vie à vos objets');

    }
    
}