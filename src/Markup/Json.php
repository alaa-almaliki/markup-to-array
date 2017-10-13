<?php

namespace Markup\Markup;

/**
 * Class Json
 * @package Data\Converter\Data
 * @author Alaa Al-Maliki <alaa.almaliki@gmail.com>
 */
class Json extends AbstractFile
{
    /**
     * @return bool|string
     */
    public function parseFile()
    {
        return file_get_contents($this->file);
    }

    /**
     * @return bool|string
     */
    public function toJson()
    {
        return $this->parseFile();
    }
}
