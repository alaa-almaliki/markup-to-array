<?php

namespace Markup\Markup;

/**
 * Class Xml
 * @package Data\Converter\Data
 * @author Alaa Al-Maliki <alaa.almaliki@gmail.com>
 */
class Xml extends AbstractFile
{
    /**
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->parseFile());
    }

    /**
     * @return \SimpleXMLElement
     */
    public function parseFile()
    {
        return simplexml_load_file($this->file, "SimpleXMLElement", LIBXML_NOCDATA);
    }
}
