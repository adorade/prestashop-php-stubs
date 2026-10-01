<?php

namespace PrestaShopBundle\Form\Admin\Login;

class RequestPasswordResetFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus)
    {
    }
    public function getData()
    {
    }
    public function setData(array $data)
    {
    }
}
