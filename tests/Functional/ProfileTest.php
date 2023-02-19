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
                'version' => 'stable (11000:d395cfd2680c)'
            ],
            'factor' => [
                'version' => '22.12.78450 (35388907)',
                'resources' => [
                    'ФИАС' => '17.02.2023',
                    'Перенесённые номера' => '17.02.2023',
                    'Геокоординаты' => '17.02.2023',
                    'Площади квартир' => '25.04.2020',
                    'Недейств. паспорта' => '17.02.2023',
                    'Цены квартир' => '16.02.2023',
                    'Телефоны' => '08.12.2022',
                    'Индексы Почты' => '29.12.2022',
                ]
            ],
            'suggestions' => [
                'version' => '22.12 (bd0e057b)',
                'resources' => [
                    'ЕГРЮЛ' => '18.02.2023',
                    'IP-адреса' => '10.02.2023',
                    'Банки' => '13.02.2023',
                    'ФИАС' => '17.02.2023',
                ]
            ]
        ];
        $actual = $this->api->getVersions();
        $this->assertEquals($expected, $actual);
    }
}
