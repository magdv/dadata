<?php

declare(strict_types=1);

namespace MagDv\Dadata;

use MagDv\Dadata\Exception\DadataApiException;
use MagDv\Dadata\Interfaces\DadataClientConfigInterface;
use Nyholm\Psr7\Request;
use Nyholm\Psr7\Uri;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;

abstract class ClientBase
{
    private ClientInterface $client;

    public function __construct(string $baseUrl, DadataClientConfigInterface $dadataClientConfig)
    {
        $this->client = $dadataClientConfig->getClient($baseUrl);
    }

    protected function get(string $url, array $query = []): array
    {
        $uri = new Uri($url . ($query ? '?' . http_build_query($query) : ''));

        $req = new Request(
            'GET',
            $uri,
        );

        try {
            $response = $this->client->sendRequest($req);
        } catch (ClientExceptionInterface $clientException) {
            throw new DadataApiException('Dadata client exception: ' . $clientException->getMessage(), $clientException->getCode(), $clientException);
        }

        if (!$this->isOk($response)) {
            throw new DadataApiException($response->getBody()->getContents());
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    protected function post(string $url, array $data): array
    {
        $req = new Request(
            'POST',
            $url,
            [],
            json_encode($data)
        );

        try {
            $response = $this->client->sendRequest($req);
        } catch (ClientExceptionInterface $clientException) {
            throw new DadataApiException('Dadata client exception: ' . $clientException->getMessage(), $clientException->getCode(), $clientException);
        }

        if (!$this->isOk($response)) {
            throw new DadataApiException($response->getBody()->getContents());
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    public function isOk(ResponseInterface $response): bool
    {
        return $response->getStatusCode() >= 200 && $response->getStatusCode() < 300;
    }
}
