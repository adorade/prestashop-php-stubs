<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\TrafficSeo\Meta;

/**
 * Class MetaSettingsFormDataProvider is responsible for providing configurations data and responsible for persisting data
 * in configuration database.
 */
final class MetaSettingsUrlSchemaFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    /**
     * MetaFormDataProvider constructor.
     *
     * @param DataConfigurationInterface $urlSchemaDataConfiguration
     * @param TranslatorInterface $translator
     * @param RouteValidator $routeValidator
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $urlSchemaDataConfiguration, \Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\Routes\RouteValidator $routeValidator)
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
