<?php

declare(strict_types=1);

namespace MagDv\Dadata\Tests\Functional;

use MagDv\Dadata\Interfaces\DadataClientConfigInterface;
use PHPUnit\Framework\TestCase;

abstract class BaseTest extends TestCase
{
    public DadataClientConfigInterface $config;

    public static function setUpBeforeClass(): void
    {
        $params = parse_ini_file(dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . '.env');

        foreach ($params as $name => $value) {
            putenv($name . '=' . $value);
        }
    }

    protected function setUp(): void
    {
        $this->config = new DadataConfig(
            getenv('TOKEN'),
            getenv('SECRET')
        );
    }
}
