<?php

namespace PrestaShop\PrestaShop\Core\Image\Parser;

/**
 * Interface ImageTagSourceParserInterface is contract for image "src" attribute parser.
 */
interface ImageTagSourceParserInterface
{
    /**
     * @param string $imageTag Example '<img src="..path/to/image.jpg">'
     *
     * @return string|null Parsed "src" attribute
     */
    public function parse(string $imageTag): ?string;
}
