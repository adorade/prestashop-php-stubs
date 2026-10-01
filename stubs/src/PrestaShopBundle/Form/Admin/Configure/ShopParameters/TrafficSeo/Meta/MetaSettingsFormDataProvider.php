<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\TrafficSeo\Meta;

/**
 * Class MetaSettingsFormDataProvider is responsible for providing configurations data and responsible for persisting data
 * in configuration database.
 *
 * @deprecated since 1.7.8, will be removed in the next major version
 */
final class MetaSettingsFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    /**
     * MetaFormDataProvider constructor.
     *
     * @param \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $setUpUrlDataConfiguration
     * @param \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $shopUrlsDataConfiguration
     * @param \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $urlSchemaDataConfiguration
     * @param \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $seoOptionsDataConfiguration
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Adapter\Routes\RouteValidator $routeValidator
     * @param \PrestaShop\PrestaShop\Adapter\Validate $validate
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $setUpUrlDataConfiguration, \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $shopUrlsDataConfiguration, \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $urlSchemaDataConfiguration, \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $seoOptionsDataConfiguration, \Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\Routes\RouteValidator $routeValidator, \PrestaShop\PrestaShop\Adapter\Validate $validate)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setData(array $data)
    {
    }
}
