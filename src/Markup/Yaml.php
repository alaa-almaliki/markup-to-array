<?php

namespace Markup\Markup;

/**
 * Class Yaml
 * @package Data\Converter\Data
 * @author Alaa Al-Maliki <alaa.almaliki@gmail.com>
 */
class Yaml extends Xml
{
    /**
     * @return mixed
     */
    public function parseFile()
    {
        return yaml_parse_file($this->file);
    }
}
