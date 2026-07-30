<?php

namespace PrestaShopBundle\Install;

class SimplexmlElement extends \SimpleXMLElement
{
    /**
     * Can add SimpleXMLElement values in XML tree.
     *
     * @param string $name
     * @param string|SimplexmlElement|null $value
     * @param string|null $namespace
     *
     * @return \SimpleXMLElement|void
     */
    public function addChild($name, $value = null, $namespace = null)
    {
    }
    /**
     * Generate nice and sweet XML.
     *
     * @see SimpleXMLElement::asXML()
     */
    #[\ReturnTypeWillChange]
    public function asXML($filename = null)
    {
    }
}
