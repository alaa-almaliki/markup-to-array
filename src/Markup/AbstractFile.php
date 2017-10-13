<?php

namespace Markup\Markup;

/**
 * Class File
 * @package Data\Converter\Data
 * @author Alaa Al-Maliki <alaa.almaliki@gmail.com>
 */
abstract class AbstractFile implements FileInterface, FileParserInterface, JsonInterface
{
    /**
     * @var string
     */
    protected $file;

    /**
     * File constructor.
     * @param  string $file
     */
    public function __construct($file)
    {
        $this->file = $file;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return json_decode($this->toJson(), true);
    }
}
