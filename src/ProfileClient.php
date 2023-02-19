<?php

declare(strict_types=1);

namespace MagDv\Dadata;

use DateTime;
use MagDv\Dadata\Interfaces\DadataClientConfigInterface;

class ProfileClient extends ClientBase
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

    public function getDailyStats($date = null): array
    {
        $url = "stat/daily";
        if (!$date) {
            $date = new DateTime();
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
