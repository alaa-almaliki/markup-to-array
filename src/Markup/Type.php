<?php

namespace Markup\Markup;

use Markup\MarkupException;

/**
 * Class Type
 * @package Data\Converter\Data
 * @author Alaa Al-Maliki <alaa.almaliki@gmail.com>
 */
class Type
{
    /**
     * @var array
     */
    private static $mappedTypes = [
        'xml'   => 'Xml',
        'json'  => 'Json',
        'yml'   => 'Yaml',
    ];

    /**
     * @var string
     */
    private $extension;

    /**
     * @var string
     */
    private $file;

    /**
     * @var string
     */
    private $type;

    /**
     * Type constructor.
     * @param $file
     */
    public function __construct($file)
    {
        $this->file = $file;
        $this->extension = pathinfo($file, PATHINFO_EXTENSION);
        $this->validateExtension();
        $this->type = $this->getMappedType($this->extension);
    }

    /**
     * @return AbstractFile
     */
    public function getObject()
    {
        $class = '\Markup\Markup\\' . $this->type;
        return new $class($this->file);
    }

    /**
     * @return mixed|string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $extension
     * @return string
     */
    private function getMappedType($extension)
    {
        return self::$mappedTypes[$extension];
    }

    /**
     * @param  string $extension
     * @throws MarkupException
     */
    protected function validateExtension()
    {
        if (!in_array($this->extension, array_keys(self::$mappedTypes))) {
            throw new MarkupException($this->extension . ' extension is not allowed');
        }
    }
}
