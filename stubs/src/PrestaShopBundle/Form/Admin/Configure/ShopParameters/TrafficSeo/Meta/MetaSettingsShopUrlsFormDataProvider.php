<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\TrafficSeo\Meta;

/**
 * Class MetaSettingsFormDataProvider is responsible for providing configurations data and responsible for persisting data
 * in configuration database.
 */
final class MetaSettingsShopUrlsFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    /**
     * MetaFormDataProvider constructor.
     *
     * @param \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $shopUrlsDataConfiguration
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Adapter\Validate $validate
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $shopUrlsDataConfiguration, \Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\Validate $validate)
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
