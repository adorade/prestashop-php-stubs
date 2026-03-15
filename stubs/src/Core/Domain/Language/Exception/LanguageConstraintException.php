<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\Exception;

/**
 * Is thrown when invalid data is supplied for language
 */
class LanguageConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Language\Exception\LanguageException
{
    /**
     * @var int Code is used when invalid language IETF tag is encountered
     */
    public const INVALID_IETF_TAG = 1;
    /**
     * @var int Code is used when invalid language ISO code in encountered
     */
    public const INVALID_ISO_CODE = 2;
    /**
     * @var int Code is used when duplicate language ISO code in encountered when creating new language
     */
    public const DUPLICATE_ISO_CODE = 3;
    /**
     * @var int Code is used when empty data is used when deleting languages
     */
    public const EMPTY_BULK_DELETE = 4;
}
