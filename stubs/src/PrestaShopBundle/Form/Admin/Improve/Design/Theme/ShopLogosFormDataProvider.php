<?php

namespace PrestaShopBundle\Form\Admin\Improve\Design\Theme;

/**
 * {@inheritdoc}
 */
final class ShopLogosFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus
     * @param \PrestaShop\PrestaShop\Core\Form\MultiStoreSettingsFormDataProviderInterface $themeMultiStoreSettingsFormDataProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus, \PrestaShop\PrestaShop\Core\Form\MultiStoreSettingsFormDataProviderInterface $themeMultiStoreSettingsFormDataProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData()
    {
    }
    /**
     * @param array $data
     *
     * @return array
     */
    public function setData(array $data)
    {
    }
}
