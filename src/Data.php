<?php

namespace Markup;

use Markup\Markup\FileInterface;
use Markup\Markup\Type;

/**
 * Class Data
 * @package Data\Converter
 * @author Alaa Al-Maliki <alaa.almaliki@gmail.com>
 */
class Data implements DataInterface
{
    /**
     * @var FileInterface
     */
    protected $file;

    /**
     * @var Type
     */
    protected $type;

    /**
     * Data constructor.
     * @param string $filePath
     */
    public function __construct($filePath)
    {
        $this->validateFile($filePath);
        $this->type = new Type($filePath);
        $this->file = $this->type->getObject();
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type->getType();
    }

    /**
     * @return mixed|string
     */
    public function getExtension()
    {
        return $this->type->getExtension();
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->file->toArray();
    }

    /**
     * @param  string $filePath
     * @throws MarkupException
     */
    protected function validateFile($filePath)
    {
        if (!file_exists($filePath)) {
            throw new MarkupException($filePath . ' is not exist');
        }
    }
}
