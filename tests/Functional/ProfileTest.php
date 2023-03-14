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
                'version' => 'stable (11024:47fe00aeaa63)'
            ],
            'factor' => [
                'version' => '22.12.78450 (35388907)',
                'resources' => [
                    'ФИАС' => '10.03.2023',
                    'Перенесённые номера' => '10.03.2023',
                    'Геокоординаты' => '03.03.2023',
                    'Площади квартир' => '25.04.2020',
                    'Недейств. паспорта' => '13.03.2023',
                    'Цены квартир' => '02.03.2023',
                    'Телефоны' => '08.12.2022',
                    'Индексы Почты' => '29.12.2022',
                ]
            ],
            'suggestions' => [
                'version' => '23.1 (689843ee)',
                'resources' => [
                    'ЕГРЮЛ' => '13.03.2023',
                    'IP-адреса' => '10.02.2023',
                    'Банки' => '13.03.2023',
                    'ФИАС' => '10.03.2023',
                ]
            ]
        ];
        $actual = $this->api->getVersions();
        $this->assertEquals($expected, $actual);
    }
}
