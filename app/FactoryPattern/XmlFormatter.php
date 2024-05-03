<?php

namespace App\FactoryPattern;

class XmlFormatter implements Formatter
{
    public function format(array $data): string
    {
        $xml = new \SimpleXMLElement('<root />');
        array_walk_recursive($data, array($xml, 'addChild'));

        return $xml->asXML();
    }
}
