<?php

declare(strict_types=1);

namespace MagDv\Dadata\Interfaces;

use Psr\Http\Client\ClientInterface;

interface DadataClientConfigInterface
{
    public function getClient(string $baseUrl): ClientInterface;
}
