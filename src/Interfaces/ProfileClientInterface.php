<?php

declare(strict_types=1);

namespace MagDv\Dadata\Interfaces;

interface ProfileClientInterface
{
    public function getBalance(): string;

    public function getDailyStats(\DateTimeImmutable $date = null): array;

    public function getVersions(): array;
}
