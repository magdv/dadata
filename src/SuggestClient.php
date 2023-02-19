<?php

declare(strict_types=1);

namespace MagDv\Dadata;

use MagDv\Dadata\Interfaces\DadataClientConfigInterface;

class SuggestClient extends ClientBase
{
    public const BASE_URL = "https://suggestions.dadata.ru/suggestions/api/4_1/rs/";

    public function __construct(DadataClientConfigInterface $dadataClientConfig)
    {
        parent::__construct(self::BASE_URL, $dadataClientConfig);
    }

    public function findAffiliated($query, $count = Settings::SUGGESTION_COUNT, $kwargs = []): array
    {
        $url = "findAffiliated/party";
        $data = ["query" => $query, "count" => $count];
        $data = $data + $kwargs;
        $response = $this->post($url, $data);
        return $response["suggestions"];
    }

    public function findById($name, $query, $count = Settings::SUGGESTION_COUNT, $kwargs = []): array
    {
        $url = "findById/$name";
        $data = ["query" => $query, "count" => $count];
        $data = $data + $kwargs;
        $response = $this->post($url, $data);
        return $response["suggestions"];
    }

    public function geolocate($name, $lat, $lon, $radiusMeters = 100, $count = Settings::SUGGESTION_COUNT, $kwargs = []): array
    {
        $url = "geolocate/$name";
        $data = [
            "lat" => $lat,
            "lon" => $lon,
            "radius_meters" => $radiusMeters,
            "count" => $count,
        ];
        $data = $data + $kwargs;
        $response = $this->post($url, $data);
        return $response["suggestions"];
    }

    public function iplocate($ip, $kwargs = []): ?array
    {
        $url = "iplocate/address";
        $query = ["ip" => $ip];
        $query = $query + $kwargs;
        $response = $this->get($url, $query);
        return $response["location"];
    }

    public function suggest($name, $query, $count = Settings::SUGGESTION_COUNT, $kwargs = []): array
    {
        $url = "suggest/$name";
        $data = ["query" => $query, "count" => $count];
        $data = $data + $kwargs;
        $response = $this->post($url, $data);
        return $response["suggestions"];
    }
}
