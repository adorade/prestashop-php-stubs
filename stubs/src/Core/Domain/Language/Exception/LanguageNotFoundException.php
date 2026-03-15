<?php

namespace PrestaShop\PrestaShop\Core\Domain\Language\Exception;

/**
 * Exception is thrown when language is not found
 */
class LanguageNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\Language\Exception\LanguageException
{
    /**
     * @param LanguageId $languageId
     * @param string $message
     * @param int $code
     * @param \Exception|null $previous
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId $languageId, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return LanguageId
     */
    public function getLanguageId()
    {
    }
}
