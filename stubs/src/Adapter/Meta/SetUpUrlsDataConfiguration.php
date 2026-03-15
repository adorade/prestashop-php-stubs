<?php

namespace PrestaShop\PrestaShop\Adapter\Meta;

/**
 * Class SetUpUrlsDataConfiguration is responsible for saving, validating and getting configurations related with urls
 * configuration located in Shop parameters -> Traffic & Seo -> Seo & Urls.
 */
final class SetUpUrlsDataConfiguration extends \PrestaShop\PrestaShop\Core\Configuration\AbstractMultistoreConfiguration
{
    /**
     * SetUpUrlsDataConfiguration constructor.
     *
     * @param Configuration $configuration
     * @param Context $shopContext
     * @param FeatureInterface $multistoreFeature
     * @param HtaccessFileGenerator $htaccessFileGenerator
     * @param TranslatorInterface $translator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Adapter\Shop\Context $shopContext, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature, \PrestaShop\PrestaShop\Adapter\File\HtaccessFileGenerator $htaccessFileGenerator, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getConfiguration()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function updateConfiguration(array $configuration)
    {
    }
}
