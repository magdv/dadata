<?php

declare(strict_types=1);

namespace MagDv\Dadata;

use MagDv\Dadata\Interfaces\DadataClientConfigInterface;

class CleanClient extends ClientBase
{
    public const BASE_URL = "https://cleaner.dadata.ru/api/v1/";

    public function __construct(DadataClientConfigInterface $dadataClientConfig)
    {
        parent::__construct(self::BASE_URL, $dadataClientConfig);
    }

    public function clean($name, $value)
    {
        $url = "clean/$name";
        $fields = [$value];
        $response = $this->post($url, $fields);
        return $response[0];
    }

    public function cleanRecord($structure, $record)
    {
        $url = "clean";
        $data = [
            "structure" => $structure,
            "data" => [$record]
        ];
        $response = $this->post($url, $data);
        return $response["data"][0];
    }
}
