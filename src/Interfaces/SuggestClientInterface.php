<?php

declare(strict_types=1);

namespace MagDv\Dadata\Interfaces;

use MagDv\Dadata\Settings;

interface SuggestClientInterface
{
    public function findAffiliated(string $query, int $count = Settings::SUGGESTION_COUNT, array $kwargs = []): array;

    public function findById(string $name, string $query, int $count = Settings::SUGGESTION_COUNT, array $kwargs = []): array;

    public function geolocate(string $name, float $lat, float $lon, int $radiusMeters = 100, int $count = Settings::SUGGESTION_COUNT, array $kwargs = []): array;

    public function iplocate(string $ip, array $kwargs = []): ?array;

    public function suggest(string $name, string $query, int $count = Settings::SUGGESTION_COUNT, array $kwargs = []): array;
}
