<?php

namespace PrestaShop\PrestaShop\Core\Import\Configuration;

/**
 * Class ImportRuntimeConfig defines import runtime configuration.
 */
final class ImportRuntimeConfig implements \PrestaShop\PrestaShop\Core\Import\Configuration\ImportRuntimeConfigInterface
{
    /**
     * @param bool $shouldValidateData
     * @param int $offset
     * @param int $limit
     * @param array $sharedData
     * @param array $entityFields
     */
    public function __construct($shouldValidateData, $offset, $limit, array $sharedData, array $entityFields)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function shouldValidateData()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getOffset()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getLimit()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getEntityFields()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getSharedData()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function addSharedDataItem($key, $value)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isFinished()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setNumberOfProcessedRows($number)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getNumberOfProcessedRows()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setRequestSizeInBytes($size)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setPostSizeLimitInBytes($size)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setTotalNumberOfRows($number)
    {
    }
    /**
     * @param array $notices
     *
     * @return array|void
     */
    public function setNotices(array $notices)
    {
    }
    /**
     * @param array $warnings
     *
     * @return array|void
     */
    public function setWarnings(array $warnings)
    {
    }
    /**
     * @param array $errors
     *
     * @return array|void
     */
    public function setErrors(array $errors)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
    }
}
