<?php

declare(strict_types=1);

namespace MagDv\Dadata;

use MagDv\Dadata\Interfaces\DadataClientConfigInterface;
use MagDv\Dadata\Interfaces\DadataClientInterface;

class DadataClient implements DadataClientInterface
{
    private CleanClient $cleaner;
    private ProfileClient $profile;
    private SuggestClient $suggestions;

    public function __construct(DadataClientConfigInterface $dadataClientConfig)
    {
        $this->cleaner = new CleanClient($dadataClientConfig);
        $this->profile = new ProfileClient($dadataClientConfig);
        $this->suggestions = new SuggestClient($dadataClientConfig);
    }

    public function clean(string $name, string $value): array
    {
        return $this->cleaner->clean($name, $value);
    }

    public function cleanRecord(array $structure, array $record): array
    {
        return $this->cleaner->cleanRecord($structure, $record);
    }

    public function findAffiliated(string $query, int $count = Settings::SUGGESTION_COUNT, array $kwargs = []): array
    {
        return $this->suggestions->findAffiliated($query, $count, $kwargs);
    }

    public function findById(string $name, string $query, int $count = Settings::SUGGESTION_COUNT, array $kwargs = []): array
    {
        return $this->suggestions->findById($name, $query, $count, $kwargs);
    }

    public function geolocate(string $name, float $lat, float $lon, int $radiusMeters = 100, int $count = Settings::SUGGESTION_COUNT, array $kwargs = []): array
    {
        return $this->suggestions->geolocate($name, $lat, $lon, $radiusMeters, $count, $kwargs);
    }

    public function getBalance(): string
    {
        return $this->profile->getBalance();
    }

    public function getDailyStats(\DateTimeImmutable $date = null): array
    {
        return $this->profile->getDailyStats($date);
    }

    public function getVersions(): array
    {
        return $this->profile->getVersions();
    }

    public function iplocate(string $ip, array $kwargs = []): ?array
    {
        return $this->suggestions->iplocate($ip, $kwargs);
    }

    public function suggest(string $name, string $query, int $count = Settings::SUGGESTION_COUNT, array $kwargs = []): array
    {
        return $this->suggestions->suggest($name, $query, $count, $kwargs);
    }
}
