<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\ValueObject;

/**
 * Stores IETF tag value (e.g. en-US)
 */
class TagIETF
{
    /**
     * Regexp to validate an IETF tag, the bounding anchors are not present, so you can choose them and it allows
     * this regexp to be used in routing configuration.
     */
    public const IETF_TAG_REGEXP = '^[a-zA-Z]{2}(-[a-zA-Z]{2})?$';
    /**
     * @param string $tagIETF
     *
     * @throws LanguageConstraintException
     */
    public function __construct($tagIETF)
    {
    }
    /**
     * @return string
     */
    public function getValue()
    {
    }
}
