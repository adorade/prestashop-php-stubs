<?php

namespace PrestaShop\PrestaShop\Adapter\Meta;

/**
 * Class UrlSchemaDataConfiguration is responsible for validating, updating and retrieving data used in
 * Shop parameters -> Traffic & Seo -> Seo & Urls -> Set Shop URL form field.
 */
final class UrlSchemaDataConfiguration extends \PrestaShop\PrestaShop\Core\Configuration\AbstractMultistoreConfiguration
{
    /**
     * UrlSchemaDataConfiguration constructor.
     *
     * @param Configuration $configuration
     * @param Context $shopContext
     * @param FeatureInterface $multistoreFeature
     * @param array $rules
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Adapter\Shop\Context $shopContext, \PrestaShop\PrestaShop\Core\Feature\FeatureInterface $multistoreFeature, array $rules)
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
