<?php

namespace App\Tests\Application\Adapter\Http\PlanUser;

use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CreatePlanUserPostActionTest extends WebTestCase
{
    private const string URL_ENDPOINT = "/api/v1/create/plan/user";
    private KernelBrowser $client;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client = static::createClient();
    }

    public function testCreatePlanUser(): void
    {
        $payload = [
          "born_date" => "2003-10-12",
          "height" => 1.75,
          "weight" => 56.8,
          "goal_id" => 1,
          "sex_id" => 1
        ];

        $this->client->request(
            method: Request::METHOD_POST,
            uri: self::URL_ENDPOINT,
            server: ['CONTENT_TYPE' => 'application/json'],
            content: json_encode($payload)
        );

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }
}
