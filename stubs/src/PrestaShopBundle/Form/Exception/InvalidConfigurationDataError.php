<?php

namespace PrestaShopBundle\Form\Exception;

class InvalidConfigurationDataError
{
    /**
     * InvalidConfigurationDataError constructor.
     *
     * @param int $errorCode
     * @param string $fieldName
     * @param int|null $languageId
     */
    public function __construct(int $errorCode, string $fieldName, ?int $languageId = null)
    {
    }
    /**
     * @return int
     */
    public function getErrorCode(): int
    {
    }
    /**
     * @return string
     */
    public function getFieldName(): string
    {
    }
    /**
     * @return int|null
     */
    public function getLanguageId(): ?int
    {
    }
}
