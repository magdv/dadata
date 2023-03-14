<?php

declare(strict_types=1);

namespace MagDv\Dadata;

use MagDv\Dadata\Interfaces\DadataClientConfigInterface;
use MagDv\Dadata\Interfaces\ProfileClientInterface;

class ProfileClient extends ClientBase implements ProfileClientInterface
{
    public const BASE_URL = "https://dadata.ru/api/v2/";

    public function __construct(DadataClientConfigInterface $dadataClientConfig)
    {
        parent::__construct(self::BASE_URL, $dadataClientConfig);
    }

    public function getBalance(): string
    {
        $url = "profile/balance";
        $response = $this->get($url);
        return (string)$response["balance"];
    }

    public function getDailyStats(\DateTimeImmutable $date = null): array
    {
        $url = "stat/daily";
        if (!$date) {
            $date = new \DateTimeImmutable();
        }
        $query = ["date" => $date->format("Y-m-d")];
        return $this->get($url, $query);
    }

    public function getVersions(): array
    {
        $url = "version";
        return $this->get($url);
    }
}
