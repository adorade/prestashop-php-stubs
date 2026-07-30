<?php

namespace PrestaShop\PrestaShop\Core\Import\Configuration;

/**
 * Class ImportConfig defines import configuration.
 */
final class ImportConfig implements \PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface
{
    /**
     * @param string $fileName
     * @param int $entityType
     * @param string $languageIso
     * @param string $separator
     * @param string $multipleValueSeparator
     * @param bool $truncate
     * @param bool $skipThumbnailRegeneration
     * @param bool $matchReferences
     * @param bool $forceIds
     * @param bool $sendEmail
     * @param int $skipRows
     */
    public function __construct($fileName, $entityType, $languageIso, $separator, $multipleValueSeparator, $truncate, $skipThumbnailRegeneration, $matchReferences, $forceIds, $sendEmail, $skipRows = 0)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFileName()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getEntityType()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getLanguageIso()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getSeparator()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getMultipleValueSeparator()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function truncate()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function skipThumbnailRegeneration()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function matchReferences()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function forceIds()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function sendEmail()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getNumberOfRowsToSkip()
    {
    }
}
