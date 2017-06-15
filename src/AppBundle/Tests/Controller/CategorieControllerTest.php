<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategorieControllerTest extends WebTestCase
{
    public function testCategorielist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/categorie');
    }

    public function testCategoriedetail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/categorie/{id}');
    }

}
