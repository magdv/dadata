<?php

declare(strict_types=1);

namespace MagDv\Dadata\Interfaces;

interface CleanClientInterface
{
    public function clean(string $name, string $value): array;

    public function cleanRecord(array $structure, array $record): array;
}
