<?php

namespace Markup;

use PHPUnit\Framework\TestCase;

/**
 * Class DataTest
 * @package Markup
 * @author Alaa Al-Maliki <alaa.almaliki@gmail.com>
 */
class DataTest extends TestCase
{
    /**
     * @param  string $filePath
     * @dataProvider getFilePaths
     */
    public function testData($filePath)
    {
        $data = new Data($filePath);
        $this->assertEquals(true, in_array($data->getType(), ['Xml', 'Yaml', 'Json']));
        $this->assertEquals(true, in_array($data->getExtension(), ['xml', 'yml', 'json']));
        $this->assertEquals(self::getData(), $data->toArray());
    }

    /**
     * @expectedException \Markup\MarkupException
     */
    public function testDataFileNotFound()
    {
        new Data('no-found-file.xml');
    }

    /**
     * @expectedException \Markup\MarkupException
     */
    public function testDataInvalidExtension()
    {
        new Data(__DIR__ . '/resources/data.txt');
    }

    /**
     * @return array
     */
    public function getFilePaths()
    {
        return [
            [__DIR__ . '/resources/data.xml'],
            [__DIR__ . '/resources/data.yml'],
            [__DIR__ . '/resources/data.json'],
        ];
    }

    private static function getData()
    {
        return [
            'persons' => [
                'person1' => [
                    'name' => 'Alaa',
                    'job' => 'Web Developer',
                    'years' => 3,
                    'address' => [
                        'lines' => [
                            'line1' => 'Flat 1',
                            'line2' => '123 whitefield Road',
                        ],
                        'town' => 'Bolton',
                        'postcode' => '123456'
                    ]
                ],
                'person2' => [
                    'name' => 'Tom',
                    'job' => 'Test Analyst',
                    'years' => 5,
                    'address' => [
                        'lines' => [
                            'line1' => '456 Blackhorse Road',
                            'line2' => 'Deane Close',
                        ],
                        'town' => 'Bury',
                        'postcode' => 'ABC2 468'
                    ]
                ],
                'person3' => [
                    'name' => 'Zara',
                    'job' => 'UX Designer',
                    'years' => 2,
                    'address' => [
                        'lines' => [
                            'line1' => 'Flat 26',
                            'line2' => '789 Roseberry Street',
                        ],
                        'town' => 'Manchester',
                        'postcode' => 'M1 FDE'
                    ]
                ],
            ]
        ];
    }
}
