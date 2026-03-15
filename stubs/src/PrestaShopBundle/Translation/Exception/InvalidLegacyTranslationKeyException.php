<?php

namespace PrestaShopBundle\Translation\Exception;

/**
 * Thrown when an invalid key is found in a legacy translation file
 */
class InvalidLegacyTranslationKeyException extends \Exception
{
    /**
     * @param string $missingElement The missing element
     * @param string $key The offending key
     *
     * @return InvalidLegacyTranslationKeyException
     */
    public static function missingElementFromKey($missingElement, $key)
    {
    }
    /**
     * @return string
     */
    public function getKey()
    {
    }
}
