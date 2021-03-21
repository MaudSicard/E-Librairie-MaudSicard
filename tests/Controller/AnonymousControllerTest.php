<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AnonymousTest extends WebTestCase
{
    /**
     * Annotation suivi du nom de la méthode qui fourni les données
     *
     * @dataProvider urlProvider
     */
    public function testSomething($url): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', $url);

        // On est bien redirigé vers le login
        $this->assertResponseStatusCodeSame(302);
    }

    public function urlProvider()
    {
      yield ['/admin/author'];
      yield ['/admin/book'];
      yield ['/admin/editor'];
      yield ['/admin/gender'];
      yield ['/admin/review'];
      yield ['/admin/user'];
    }

    /**
     * @dataProvider urlProviderForPost
     */
    public function testRedirectInPost($url)
    {
        $client = self::createClient();
        $client->request('POST', $url);

        $this->assertResponseStatusCodeSame(302);
        // $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function urlProviderForPost()
    {
        yield ['/admin/create/book'];
        yield ['/admin/create/author'];
        yield ['/admin/create/editor'];
        yield ['/admin/create/gender'];
    }

    /**
     * @dataProvider urlProviderForDelete
     */
    public function testRedirectInDelete($url)
    {
        $client = self::createClient();
        $client->request('DELETE', $url);

        $this->assertResponseStatusCodeSame(302);
        // $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function urlProviderForDelete()
    {
        yield ['/admin/delete/book'];
        yield ['/admin/delete/author'];
        yield ['/admin/delete/editor'];
        yield ['/admin/delete/gender'];
    }
}
