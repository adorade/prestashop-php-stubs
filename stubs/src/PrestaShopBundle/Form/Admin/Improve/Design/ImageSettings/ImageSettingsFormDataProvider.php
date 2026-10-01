<?php

namespace PrestaShopBundle\Form\Admin\Improve\Design\ImageSettings;

/**
 * Provides data for image settings form
 */
final class ImageSettingsFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, private readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(): array
    {
    }
    public function setData(array $data)
    {
    }
}
