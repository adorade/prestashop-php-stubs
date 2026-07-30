<?php

namespace PrestaShop\PrestaShop\Core\Import\Sample;

/**
 * Class SampleFileProvider is responsible for providing sample import files.
 */
final class SampleFileProvider implements \PrestaShop\PrestaShop\Core\Import\Sample\SampleFileProviderInterface
{
    /**
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFile($sampleFileName)
    {
    }
}
