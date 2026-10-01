<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\Exception;

/**
 * Is thrown when error that is related to default language occurs
 */
class DefaultLanguageException extends \PrestaShop\PrestaShop\Core\Domain\Language\Exception\LanguageException
{
    /**
     * @var int Code is used when deleting default language
     */
    public const CANNOT_DELETE_ERROR = 1;
    /**
     * @var int Code is used when disabling default language
     */
    public const CANNOT_DISABLE_ERROR = 2;
    /**
     * @var int Code is used when deleting language that is use (e.g. as employee's default language)
     */
    public const CANNOT_DELETE_IN_USE_ERROR = 3;
    /**
     * @var int Code is used when deleting default language
     */
    public const CANNOT_DELETE_DEFAULT_ERROR = 4;
}
