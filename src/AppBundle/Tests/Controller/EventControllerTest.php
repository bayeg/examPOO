<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EventControllerTest extends WebTestCase
{
    public function testEventlist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

    public function testEventdetail()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/event/{id}');
    }

}
