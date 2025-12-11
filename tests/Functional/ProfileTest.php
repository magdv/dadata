<?php

namespace MagDv\Dadata\Tests\Functional;

use MagDv\Dadata\ProfileClient;

final class ProfileTest extends BaseTest
{
    private ?ProfileClient $api = null;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = new ProfileClient($this->config);
    }

    public function testGetBalance()
    {
        $actual = $this->api->getBalance();
        $this->assertEquals($actual, 0);
    }

    public function testGetDailyStats()
    {
        $actual = $this->api->getDailyStats();
        $this->assertArrayHasKey('date', $actual);
        $this->assertArrayHasKey('services', $actual);
        $this->assertArrayHasKey('merging', $actual['services']);
        $this->assertArrayHasKey('suggestions', $actual['services']);
        $this->assertArrayHasKey('clean', $actual['services']);
    }

    public function testVersions()
    {
        $expected = [
            'dadata' => [
                'version' => 'latest'
            ],
            'factor' => [
                'version' => '25.11.87066 (d960bbb8)',
                'resources' => [
                    'ФИАС' => '05.12.2025',
                    'Перенесённые номера' => '10.12.2025',
                    'Геокоординаты' => '05.12.2025',
                    'Площади квартир' => '25.04.2020',
                    'Недейств. паспорта' => '21.06.2023',
                    'Цены квартир' => '02.12.2025',
                    'Телефоны' => '02.11.2025',
                    'Индексы Почты' => '26.11.2025',
                ]
            ],
            'suggestions' => [
                'version' => '25.11 (ca3e900e)',
                'resources' => [
                    'ЕГРЮЛ' => '11.12.2025',
                    'IP-адреса' => '25.11.2025',
                    'Банки' => '10.12.2025',
                    'ФИАС' => '05.12.2025',
                    'ГАР' => '06.12.2025',
                    'ЕГРЮЛ Беларусь' => '08.12.2025',
                    'ЕГРЮЛ Казахстан' => '08.12.2025',
                ]
            ]
        ];
        $actual = $this->api->getVersions();
        $this->assertEquals($expected, $actual);
    }
}
