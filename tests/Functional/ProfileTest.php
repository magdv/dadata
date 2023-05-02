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
                'version' => 'stable (11137:5c099a84b367)'
            ],
            'factor' => [
                'version' => '23.2.79169 (4ad158eb)',
                'resources' => [
                    'ФИАС' => '28.04.2023',
                    'Перенесённые номера' => '28.04.2023',
                    'Геокоординаты' => '28.04.2023',
                    'Площади квартир' => '25.04.2020',
                    'Недейств. паспорта' => '28.04.2023',
                    'Цены квартир' => '02.04.2023',
                    'Телефоны' => '03.02.2023',
                    'Индексы Почты' => '13.03.2023',
                ]
            ],
            'suggestions' => [
                'version' => '23.3 (6b52ac4b)',
                'resources' => [
                    'ЕГРЮЛ' => '01.05.2023',
                    'IP-адреса' => '10.02.2023',
                    'Банки' => '01.05.2023',
                    'ФИАС' => '28.04.2023',
                ]
            ]
        ];
        $actual = $this->api->getVersions();
        $this->assertEquals($expected, $actual);
    }
}
