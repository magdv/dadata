<?php

namespace MagDv\Dadata\Tests\Functional;

use MagDv\Dadata\SuggestClient;

final class SuggestTest extends BaseTest
{
    private ?SuggestClient $api = null;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = new SuggestClient($this->config);
    }

// мой ключ не подхожит ля этого теста
//    public function testFindAffiliated()
//    {
//        $expected = [
//            ["value" => "ООО ДЗЕН.ПЛАТФОРМА", "data" => ["inn" => "7704431373"]],
//            ["value" => "ООО ЕДАДИЛ", "data" => ["inn" => "7728237907"]],
//        ];
//        $actual = $this->api->findAffiliated("7736207543");
//        $this->assertEquals($expected, $actual);
//    }

// мой ключ не подхожит ля этого теста
//    public function testFindAffiliatedRequest()
//    {
//        $actual = $this->api->findAffiliated("7736207543", 5);
//        $expected = ["query" => "7736207543", "count" => 5];
//        $this->assertEquals($expected, $actual);
//    }
// мой ключ не подхожит ля этого теста
//    public function testFindAffiliatedNotFound()
//    {
//        $expected = [];
//        $actual = $this->api->findAffiliated("1234567890");
//        $this->assertEquals($expected, $actual);
//    }

    public function testFindById()
    {
        $expected = [
            0 => [
                'value' => 'ООО "МОТОРИКА"',
                'data' => [
                    'inn' => '7719402047',
                    'kpp' => '773101001',
                    'capital' => null,
                    'invalid' => null,
                    'management' => [
                        'name' => 'Давидюк Андрей Павлович',
                        'post' => 'ГЕНЕРАЛЬНЫЙ ДИРЕКТОР',
                        'disqualified' => null,
                    ],
                    'founders' => null,
                    'managers' => null,
                    'predecessors' => null,
                    'successors' => null,
                    'branch_type' => 'MAIN',
                    'branch_count' => 0,
                    'source' => null,
                    'qc' => null,
                    'hid' => 'baf582914d601bc5246e881b07dfa6e336091a3857bebc3bf389aa0b4073223c',
                    'type' => 'LEGAL',
                    'state' => [
                        'status' => 'ACTIVE',
                        'code' => null,
                        'actuality_date' => 1676851200000,
                        'registration_date' => 1423094400000,
                        'liquidation_date' => null,
                    ],
                    'opf' => [
                        'type' => '2014',
                        'code' => '12300',
                        'full' => 'Общество с ограниченной ответственностью',
                        'short' => 'ООО',
                    ],
                    'name' => [
                        'full_with_opf' => 'ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "МОТОРИКА"',
                        'short_with_opf' => 'ООО "МОТОРИКА"',
                        'latin' => null,
                        'full' => 'МОТОРИКА',
                        'short' => 'МОТОРИКА',
                    ],
                    'ogrn' => '1157746078984',
                    'okpo' => '27539247',
                    'okato' => '45268569000',
                    'oktmo' => '45321000000',
                    'okogu' => '4210011',
                    'okfs' => '34',
                    'okved' => '72.19',
                    'okveds' => null,
                    'authorities' => null,
                    'documents' => null,
                    'licenses' => null,
                    'finance' => [
                        'tax_system' => null,
                        'income' => null,
                        'expense' => null,
                        'debt' => null,
                        'penalty' => null,
                        'year' => null,
                    ],
                    'address' => [
                        'value' => '121205, Г.Москва, Б-Р Большой (Сколково инновационного центра тер), Д. 42, СТР. 1, ЭТ 1 ПОМ 334 РАБ 10',
                        'unrestricted_value' => '121205, Г.Москва, Б-Р Большой (Сколково инновационного центра тер), Д. 42, СТР. 1, ЭТ 1 ПОМ 334 РАБ 10',
                        'invalidity' => null,
                        'data' => [
                            'postal_code' => '121205',
                            'country' => 'Россия',
                            'country_iso_code' => 'RU',
                            'federal_district' => 'Центральный',
                            'region_fias_id' => '0c5b2444-70a0-4932-980c-b4dc0d3f02b5',
                            'region_kladr_id' => '7700000000000',
                            'region_iso_code' => 'RU-MOW',
                            'region_with_type' => 'г Москва',
                            'region_type' => 'г',
                            'region_type_full' => 'город',
                            'region' => 'Москва',
                            'area_fias_id' => null,
                            'area_kladr_id' => null,
                            'area_with_type' => null,
                            'area_type' => null,
                            'area_type_full' => null,
                            'area' => null,
                            'city_fias_id' => '0c5b2444-70a0-4932-980c-b4dc0d3f02b5',
                            'city_kladr_id' => '7700000000000',
                            'city_with_type' => 'г Москва',
                            'city_type' => 'г',
                            'city_type_full' => 'город',
                            'city' => 'Москва',
                            'city_area' => 'Западный',
                            'city_district_fias_id' => null,
                            'city_district_kladr_id' => null,
                            'city_district_with_type' => 'Можайский р-н',
                            'city_district_type' => 'р-н',
                            'city_district_type_full' => 'район',
                            'city_district' => 'Можайский',
                            'settlement_fias_id' => 'db22b565-f8ab-464b-b76f-1106629e9e95',
                            'settlement_kladr_id' => '7700000043000',
                            'settlement_with_type' => 'тер Сколково инновационного центра',
                            'settlement_type' => 'тер',
                            'settlement_type_full' => 'территория',
                            'settlement' => 'Сколково инновационного центра',
                            'street_fias_id' => '5a08abaa-929f-4855-a460-c691f37b5a25',
                            'street_kladr_id' => '77000000430000400',
                            'street_with_type' => 'Большой б-р',
                            'street_type' => 'б-р',
                            'street_type_full' => 'бульвар',
                            'street' => 'Большой',
                            'stead_fias_id' => null,
                            'stead_cadnum' => null,
                            'stead_type' => null,
                            'stead_type_full' => null,
                            'stead' => null,
                            'house_fias_id' => '0519d3e3-d0f6-4106-b1af-c14ddf8f43f5',
                            'house_kladr_id' => '7700000043000040007',
                            'house_cadnum' => '77:15:0020321:389',
                            'house_type' => 'д',
                            'house_type_full' => 'дом',
                            'house' => '42',
                            'block_type' => 'стр',
                            'block_type_full' => 'строение',
                            'block' => '1',
                            'entrance' => null,
                            'floor' => '1',
                            'flat_fias_id' => null,
                            'flat_cadnum' => null,
                            'flat_type' => 'помещ',
                            'flat_type_full' => 'помещение',
                            'flat' => '334',
                            'flat_area' => null,
                            'square_meter_price' => null,
                            'flat_price' => null,
                            'room_fias_id' => null,
                            'room_cadnum' => null,
                            'room_type' => null,
                            'room_type_full' => null,
                            'room' => null,
                            'postal_box' => null,
                            'fias_id' => '0519d3e3-d0f6-4106-b1af-c14ddf8f43f5',
                            'fias_code' => '77000000430000000040007',
                            'fias_level' => '8',
                            'fias_actuality_state' => '0',
                            'kladr_id' => '7700000043000040007',
                            'geoname_id' => '524901',
                            'capital_marker' => '0',
                            'okato' => '45268569000',
                            'oktmo' => '45321000',
                            'tax_office' => '7731',
                            'tax_office_legal' => '7731',
                            'timezone' => 'UTC+3',
                            'geo_lat' => '55.6921337',
                            'geo_lon' => '37.3474933',
                            'beltway_hit' => 'OUT_MKAD',
                            'beltway_distance' => '4',
                            'metro' => [
                                [
                                    'name' => 'Сколково',
                                    'line' => 'Белорусско-Савеловский',
                                    'distance' => 0.9,
                                ],
                                [
                                    'name' => 'Баковка',
                                    'line' => 'Белорусско-Савеловский',
                                    'distance' => 2.3,
                                ],
                                [
                                    'name' => 'Немчиновка',
                                    'line' => 'Белорусско-Савеловский',
                                    'distance' => 3.2,
                                ]
                            ],
                            'divisions' => null,
                            'qc_geo' => '0',
                            'qc_complete' => null,
                            'qc_house' => null,
                            'history_values' => null,
                            'unparsed_parts' => null,
                            'source' => '121205, Г.Москва, Б-Р Большой (Сколково инновационного центра тер), Д. 42, СТР. 1, ЭТ 1 ПОМ 334 РАБ 10',
                            'qc' => '1',
                        ],
                    ],
                    'phones' => null,
                    'emails' => null,
                    'ogrn_date' => 1423094400000,
                    'okved_type' => '2014',
                    'employee_count' => null,
                ],
                'unrestricted_value' => 'ООО "МОТОРИКА"',
            ],
        ];
        $actual = $this->api->findById("party", "7719402047");
        $this->assertEquals($expected, $actual);
    }

    public function testFindByIdRequest()
    {
        $kwargs = [
            "kpp" => "773101001"
        ];
        $actual = $this->api->findById("party", "7719402047", 5, $kwargs);
        $expected = [
            [
                'value' => 'ООО "МОТОРИКА"',
                'unrestricted_value' => 'ООО "МОТОРИКА"',
                'data' => [
                    'kpp' => '773101001',
                    'capital' => null,
                    'invalid' => null,
                    'management' => [
                        'name' => 'Давидюк Андрей Павлович',
                        'post' => 'ГЕНЕРАЛЬНЫЙ ДИРЕКТОР',
                        'disqualified' => null,
                    ],
                    'founders' => null,
                    'managers' => null,
                    'predecessors' => null,
                    'successors' => null,
                    'branch_type' => 'MAIN',
                    'branch_count' => 0,
                    'source' => null,
                    'qc' => null,
                    'hid' => 'baf582914d601bc5246e881b07dfa6e336091a3857bebc3bf389aa0b4073223c',
                    'type' => 'LEGAL',
                    'state' => [
                        'status' => 'ACTIVE',
                        'code' => null,
                        'actuality_date' => 1676851200000,
                        'registration_date' => 1423094400000,
                        'liquidation_date' => null,
                    ],
                    'opf' => [
                        'type' => '2014',
                        'code' => '12300',
                        'full' => 'Общество с ограниченной ответственностью',
                        'short' => 'ООО',
                    ],
                    'name' => [
                        'full_with_opf' => 'ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "МОТОРИКА"',
                        'short_with_opf' => 'ООО "МОТОРИКА"',
                        'latin' => null,
                        'full' => 'МОТОРИКА',
                        'short' => 'МОТОРИКА',
                    ],
                    'inn' => '7719402047',
                    'ogrn' => '1157746078984',
                    'okpo' => '27539247',
                    'okato' => '45268569000',
                    'oktmo' => '45321000000',
                    'okogu' => '4210011',
                    'okfs' => '34',
                    'okved' => '72.19',
                    'okveds' => null,
                    'authorities' => null,
                    'documents' => null,
                    'licenses' => null,
                    'finance' => [
                        'tax_system' => null,
                        'income' => null,
                        'expense' => null,
                        'debt' => null,
                        'penalty' => null,
                        'year' => null,
                    ],
                    'address' => [
                        'value' => '121205, Г.Москва, Б-Р Большой (Сколково инновационного центра тер), Д. 42, СТР. 1, ЭТ 1 ПОМ 334 РАБ 10',
                        'unrestricted_value' => '121205, Г.Москва, Б-Р Большой (Сколково инновационного центра тер), Д. 42, СТР. 1, ЭТ 1 ПОМ 334 РАБ 10',
                        'invalidity' => null,
                        'data' => [
                            'postal_code' => '121205',
                            'country' => 'Россия',
                            'country_iso_code' => 'RU',
                            'federal_district' => 'Центральный',
                            'region_fias_id' => '0c5b2444-70a0-4932-980c-b4dc0d3f02b5',
                            'region_kladr_id' => '7700000000000',
                            'region_iso_code' => 'RU-MOW',
                            'region_with_type' => 'г Москва',
                            'region_type' => 'г',
                            'region_type_full' => 'город',
                            'region' => 'Москва',
                            'area_fias_id' => null,
                            'area_kladr_id' => null,
                            'area_with_type' => null,
                            'area_type' => null,
                            'area_type_full' => null,
                            'area' => null,
                            'city_fias_id' => '0c5b2444-70a0-4932-980c-b4dc0d3f02b5',
                            'city_kladr_id' => '7700000000000',
                            'city_with_type' => 'г Москва',
                            'city_type' => 'г',
                            'city_type_full' => 'город',
                            'city' => 'Москва',
                            'city_area' => 'Западный',
                            'city_district_fias_id' => null,
                            'city_district_kladr_id' => null,
                            'city_district_with_type' => 'Можайский р-н',
                            'city_district_type' => 'р-н',
                            'city_district_type_full' => 'район',
                            'city_district' => 'Можайский',
                            'settlement_fias_id' => 'db22b565-f8ab-464b-b76f-1106629e9e95',
                            'settlement_kladr_id' => '7700000043000',
                            'settlement_with_type' => 'тер Сколково инновационного центра',
                            'settlement_type' => 'тер',
                            'settlement_type_full' => 'территория',
                            'settlement' => 'Сколково инновационного центра',
                            'street_fias_id' => '5a08abaa-929f-4855-a460-c691f37b5a25',
                            'street_kladr_id' => '77000000430000400',
                            'street_with_type' => 'Большой б-р',
                            'street_type' => 'б-р',
                            'street_type_full' => 'бульвар',
                            'street' => 'Большой',
                            'stead_fias_id' => null,
                            'stead_cadnum' => null,
                            'stead_type' => null,
                            'stead_type_full' => null,
                            'stead' => null,
                            'house_fias_id' => '0519d3e3-d0f6-4106-b1af-c14ddf8f43f5',
                            'house_kladr_id' => '7700000043000040007',
                            'house_cadnum' => '77:15:0020321:389',
                            'house_type' => 'д',
                            'house_type_full' => 'дом',
                            'house' => '42',
                            'block_type' => 'стр',
                            'block_type_full' => 'строение',
                            'block' => '1',
                            'entrance' => null,
                            'floor' => '1',
                            'flat_fias_id' => null,
                            'flat_cadnum' => null,
                            'flat_type' => 'помещ',
                            'flat_type_full' => 'помещение',
                            'flat' => '334',
                            'flat_area' => null,
                            'square_meter_price' => null,
                            'flat_price' => null,
                            'room_fias_id' => null,
                            'room_cadnum' => null,
                            'room_type' => null,
                            'room_type_full' => null,
                            'room' => null,
                            'postal_box' => null,
                            'fias_id' => '0519d3e3-d0f6-4106-b1af-c14ddf8f43f5',
                            'fias_code' => '77000000430000000040007',
                            'fias_level' => '8',
                            'fias_actuality_state' => '0',
                            'kladr_id' => '7700000043000040007',
                            'geoname_id' => '524901',
                            'capital_marker' => '0',
                            'okato' => '45268569000',
                            'oktmo' => '45321000',
                            'tax_office' => '7731',
                            'tax_office_legal' => '7731',
                            'timezone' => 'UTC+3',
                            'geo_lat' => '55.6921337',
                            'geo_lon' => '37.3474933',
                            'beltway_hit' => 'OUT_MKAD',
                            'beltway_distance' => '4',
                            'metro' => [
                                [
                                    'name' => 'Сколково',
                                    'line' => 'Белорусско-Савеловский',
                                    'distance' => 0.9
                                ],
                                [
                                    'name' => 'Баковка',
                                    'line' => 'Белорусско-Савеловский',
                                    'distance' => 2.3,
                                ],
                                [
                                    'name' => 'Немчиновка',
                                    'line' => 'Белорусско-Савеловский',
                                    'distance' => 3.2,
                                ]
                            ],
                            'divisions' => null,
                            'qc_geo' => '0',
                            'qc_complete' => null,
                            'qc_house' => null,
                            'history_values' => null,
                            'unparsed_parts' => null,
                            'source' => '121205, Г.Москва, Б-Р Большой (Сколково инновационного центра тер), Д. 42, СТР. 1, ЭТ 1 ПОМ 334 РАБ 10',
                            'qc' => '1',
                        ],
                    ],
                    'phones' => null,
                    'emails' => null,
                    'ogrn_date' => 1423094400000,
                    'okved_type' => '2014',
                    'employee_count' => null,
                ],
            ]
        ];
        $this->assertEquals($expected, $actual);
    }

    public function testFindByIdNotFound()
    {
        $expected = [];
        $actual = $this->api->findById("party", "1234567890");
        $this->assertEquals($expected, $actual);
    }

    public function testGeolocate()
    {
        $expected = [
            "value" => "г Москва, ул Сухонская, д 11",
            'unrestricted_value' => '127642, г Москва, р-н Северное Медведково, ул Сухонская, д 11',
            "data" => [
                "kladr_id" => "7700000000028360004",
                'postal_code' => '127642',
                'country' => 'Россия',
                'country_iso_code' => 'RU',
                'federal_district' => 'Центральный',
                'region_fias_id' => '0c5b2444-70a0-4932-980c-b4dc0d3f02b5',
                'region_kladr_id' => '7700000000000',
                'region_iso_code' => 'RU-MOW',
                'region_with_type' => 'г Москва',
                'region_type' => 'г',
                'region_type_full' => 'город',
                'region' => 'Москва',
                'area_fias_id' => null,
                'area_kladr_id' => null,
                'area_with_type' => null,
                'area_type' => null,
                'area_type_full' => null,
                'area' => null,
                'city_fias_id' => '0c5b2444-70a0-4932-980c-b4dc0d3f02b5',
                'city_kladr_id' => '7700000000000',
                'city_with_type' => 'г Москва',
                'city_type' => 'г',
                'city_type_full' => 'город',
                'city' => 'Москва',
                'city_area' => 'Северо-восточный',
                'city_district_fias_id' => null,
                'city_district_kladr_id' => null,
                'city_district_with_type' => null,
                'city_district_type' => null,
                'city_district_type_full' => null,
                'city_district' => null,
                'settlement_fias_id' => null,
                'settlement_kladr_id' => null,
                'settlement_with_type' => null,
                'settlement_type' => null,
                'settlement_type_full' => null,
                'settlement' => null,
                'street_fias_id' => '95dbf7fb-0dd4-4a04-8100-4f6c847564b5',
                'street_kladr_id' => '77000000000283600',
                'street_with_type' => 'ул Сухонская',
                'street_type' => 'ул',
                'street_type_full' => 'улица',
                'street' => 'Сухонская',
                'stead_fias_id' => null,
                'stead_cadnum' => null,
                'stead_type' => null,
                'stead_type_full' => null,
                'stead' => null,
                'house_fias_id' => '5ee84ac0-eb9a-4b42-b814-2f5f7c27c255',
                'house_kladr_id' => '7700000000028360004',
                'house_cadnum' => null,
                'house_type' => 'д',
                'house_type_full' => 'дом',
                'house' => '11',
                'block_type' => null,
                'block_type_full' => null,
                'block' => null,
                'entrance' => null,
                'floor' => null,
                'flat_fias_id' => null,
                'flat_cadnum' => null,
                'flat_type' => null,
                'flat_type_full' => null,
                'flat' => null,
                'flat_area' => null,
                'square_meter_price' => null,
                'flat_price' => null,
                'room_fias_id' => null,
                'room_cadnum' => null,
                'room_type' => null,
                'room_type_full' => null,
                'room' => null,
                'postal_box' => null,
                'fias_id' => '5ee84ac0-eb9a-4b42-b814-2f5f7c27c255',
                'fias_code' => null,
                'fias_level' => '8',
                'fias_actuality_state' => '0',
                'geoname_id' => '524901',
                'capital_marker' => '0',
                'okato' => '45280583000',
                'oktmo' => '45362000',
                'tax_office' => '7715',
                'tax_office_legal' => '7715',
                'timezone' => null,
                'geo_lat' => '55.878315',
                'geo_lon' => '37.65372',
                'beltway_hit' => null,
                'beltway_distance' => null,
                'metro' => null,
                'divisions' => null,
                'qc_geo' => '0',
                'qc_complete' => null,
                'qc_house' => null,
                'history_values' => null,
                'unparsed_parts' => null,
                'source' => null,
                'qc' => null,
            ]
        ];
        $actual = $this->api->geolocate("address", 55.8782557, 37.65372);
        $this->assertEquals($expected, $actual[0]);
    }

    public function testGeolocateNotFound()
    {
        $expected = [];
        $actual = $this->api->geolocate("address", 1, 1);
        $this->assertEquals($expected, $actual);
    }

    public function testIplocate()
    {
        $expected = [
            'value' => 'г Москва',
            'data' => [
                'kladr_id' => '7700000000000',
                'postal_code' => '101000',
                'country' => 'Россия',
                'country_iso_code' => 'RU',
                'federal_district' => 'Центральный',
                'region_fias_id' => '0c5b2444-70a0-4932-980c-b4dc0d3f02b5',
                'region_kladr_id' => '7700000000000',
                'region_iso_code' => 'RU-MOW',
                'region_with_type' => 'г Москва',
                'region_type' => 'г',
                'region_type_full' => 'город',
                'region' => 'Москва',
                'area_fias_id' => null,
                'area_kladr_id' => null,
                'area_with_type' => null,
                'area_type' => null,
                'area_type_full' => null,
                'area' => null,
                'city_fias_id' => '0c5b2444-70a0-4932-980c-b4dc0d3f02b5',
                'city_kladr_id' => '7700000000000',
                'city_with_type' => 'г Москва',
                'city_type' => 'г',
                'city_type_full' => 'город',
                'city' => 'Москва',
                'city_area' => null,
                'city_district_fias_id' => null,
                'city_district_kladr_id' => null,
                'city_district_with_type' => null,
                'city_district_type' => null,
                'city_district_type_full' => null,
                'city_district' => null,
                'settlement_fias_id' => null,
                'settlement_kladr_id' => null,
                'settlement_with_type' => null,
                'settlement_type' => null,
                'settlement_type_full' => null,
                'settlement' => null,
                'street_fias_id' => null,
                'street_kladr_id' => null,
                'street_with_type' => null,
                'street_type' => null,
                'street_type_full' => null,
                'street' => null,
                'stead_fias_id' => null,
                'stead_cadnum' => null,
                'stead_type' => null,
                'stead_type_full' => null,
                'stead' => null,
                'house_fias_id' => null,
                'house_kladr_id' => null,
                'house_cadnum' => null,
                'house_type' => null,
                'house_type_full' => null,
                'house' => null,
                'block_type' => null,
                'block_type_full' => null,
                'block' => null,
                'entrance' => null,
                'floor' => null,
                'flat_fias_id' => null,
                'flat_cadnum' => null,
                'flat_type' => null,
                'flat_type_full' => null,
                'flat' => null,
                'flat_area' => null,
                'square_meter_price' => null,
                'flat_price' => null,
                'room_fias_id' => null,
                'room_cadnum' => null,
                'room_type' => null,
                'room_type_full' => null,
                'room' => null,
                'postal_box' => null,
                'fias_id' => '0c5b2444-70a0-4932-980c-b4dc0d3f02b5',
                'fias_code' => null,
                'fias_level' => '1',
                'fias_actuality_state' => '0',
                'geoname_id' => '524901',
                'capital_marker' => '0',
                'okato' => '45000000000',
                'oktmo' => '45000000',
                'tax_office' => '7700',
                'tax_office_legal' => '7700',
                'timezone' => null,
                'geo_lat' => '55.75396',
                'geo_lon' => '37.620393',
                'beltway_hit' => null,
                'beltway_distance' => null,
                'metro' => null,
                'divisions' => null,
                'qc_geo' => '4',
                'qc_complete' => null,
                'qc_house' => null,
                'history_values' => null,
                'unparsed_parts' => null,
                'source' => null,
                'qc' => null,
            ],
            'unrestricted_value' => '101000, г Москва'
        ];
        $actual = $this->api->iplocate("212.45.30.108");
        $this->assertEquals($expected, $actual);
    }

    public function testIplocateNotFound()
    {
        $actual = $this->api->iplocate("1.1.1.1");
        $this->assertNull($actual);
    }

//    public function testSuggest()
//    {
//        $expected = [
//            ["value" => "г Москва, ул Сухонская", "data" => ["kladr_id" => "77000000000283600"]],
//            ["value" => "г Москва, ул Сухонская, д 1", "data" => ["kladr_id" => "7700000000028360009"]]
//        ];
//        $actual = $this->api->suggest("address", "мск сухонская");
//        $this->assertEquals($expected, $actual);
//    }

    public function testSuggestRequest()
    {
        $kwargs = [
            "to_bound" => ["value" => "city"]
        ];
        $actual = $this->api->suggest("address", "samara", 10, $kwargs);
        $expected = [
            [
                'value' => 'г Самара',
                'unrestricted_value' => '443000, Самарская обл, г Самара',
                'data' => [
                    'postal_code' => '443000',
                    'country' => 'Россия',
                    'country_iso_code' => 'RU',
                    'federal_district' => 'Приволжский',
                    'region_fias_id' => 'df3d7359-afa9-4aaa-8ff9-197e73906b1c',
                    'region_kladr_id' => '6300000000000',
                    'region_iso_code' => 'RU-SAM',
                    'region_with_type' => 'Самарская обл',
                    'region_type' => 'обл',
                    'region_type_full' => 'область',
                    'region' => 'Самарская',
                    'area_fias_id' => null,
                    'area_kladr_id' => null,
                    'area_with_type' => null,
                    'area_type' => null,
                    'area_type_full' => null,
                    'area' => null,
                    'city_fias_id' => 'bb035cc3-1dc2-4627-9d25-a1bf2d4b936b',
                    'city_kladr_id' => '6300000100000',
                    'city_with_type' => 'г Самара',
                    'city_type' => 'г',
                    'city_type_full' => 'город',
                    'city' => 'Самара',
                    'city_area' => null,
                    'city_district_fias_id' => null,
                    'city_district_kladr_id' => null,
                    'city_district_with_type' => null,
                    'city_district_type' => null,
                    'city_district_type_full' => null,
                    'city_district' => null,
                    'settlement_fias_id' => null,
                    'settlement_kladr_id' => null,
                    'settlement_with_type' => null,
                    'settlement_type' => null,
                    'settlement_type_full' => null,
                    'settlement' => null,
                    'street_fias_id' => null,
                    'street_kladr_id' => null,
                    'street_with_type' => null,
                    'street_type' => null,
                    'street_type_full' => null,
                    'street' => null,
                    'stead_fias_id' => null,
                    'stead_cadnum' => null,
                    'stead_type' => null,
                    'stead_type_full' => null,
                    'stead' => null,
                    'house_fias_id' => null,
                    'house_kladr_id' => null,
                    'house_cadnum' => null,
                    'house_type' => null,
                    'house_type_full' => null,
                    'house' => null,
                    'block_type' => null,
                    'block_type_full' => null,
                    'block' => null,
                    'entrance' => null,
                    'floor' => null,
                    'flat_fias_id' => null,
                    'flat_cadnum' => null,
                    'flat_type' => null,
                    'flat_type_full' => null,
                    'flat' => null,
                    'flat_area' => null,
                    'square_meter_price' => null,
                    'flat_price' => null,
                    'room_fias_id' => null,
                    'room_cadnum' => null,
                    'room_type' => null,
                    'room_type_full' => null,
                    'room' => null,
                    'postal_box' => null,
                    'fias_id' => 'bb035cc3-1dc2-4627-9d25-a1bf2d4b936b',
                    'fias_code' => null,
                    'fias_level' => '4',
                    'fias_actuality_state' => '0',
                    'kladr_id' => '6300000100000',
                    'geoname_id' => '499099',
                    'capital_marker' => '2',
                    'okato' => '36401000000',
                    'oktmo' => '36701000',
                    'tax_office' => '6300',
                    'tax_office_legal' => '6300',
                    'timezone' => null,
                    'geo_lat' => '53.195096',
                    'geo_lon' => '50.106868',
                    'beltway_hit' => null,
                    'beltway_distance' => null,
                    'metro' => null,
                    'divisions' => null,
                    'qc_geo' => '4',
                    'qc_complete' => null,
                    'qc_house' => null,
                    'history_values' => null,
                    'unparsed_parts' => null,
                    'source' => null,
                    'qc' => null,
                ],
            ]
        ];
        $this->assertEquals($expected, $actual);
    }

    public function testSuggestNotFound()
    {
        $expected = [];
        $actual = $this->api->suggest("address", "whatever");
        $this->assertEquals($expected, $actual);
    }
}
