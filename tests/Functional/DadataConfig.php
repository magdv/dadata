<?php

declare(strict_types=1);

namespace MagDv\Dadata\Tests\Functional;

use GuzzleHttp\Client;
use MagDv\Dadata\Interfaces\DadataClientConfigInterface;
use MagDv\Dadata\Settings;
use Psr\Http\Client\ClientInterface;

class DadataConfig implements DadataClientConfigInterface
{

    private string $token;
    private string $secret;

    public function __construct(string $token, string $secret)
    {
        $this->token = $token;
        $this->secret = $secret;
    }

    public function getClient(string $baseUrl): ClientInterface
    {
         $headers = [
            "Content-Type" => "application/json",
            "Accept" => "application/json",
            "Authorization" => "Token " . $this->token,
        ];

        $headers["X-Secret"] = $this->secret;

        return new Client([
//            'debug' => true,
            "base_uri" => $baseUrl,
            "headers" => $headers,
            "timeout" => Settings::TIMEOUT_SEC
        ]);
    }
}