<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Order;

class OrderReturnPresenter implements \PrestaShop\PrestaShop\Adapter\Presenter\PresenterInterface
{
    /**
     * OrderReturnPresenter constructor.
     *
     * @param string $prefix
     * @param Link $link
     */
    public function __construct($prefix, \Link $link)
    {
    }
    /**
     * @param array $orderReturn
     *
     * @return OrderReturnLazyArray
     *
     * @throws \ReflectionException
     */
    public function present($orderReturn)
    {
    }
}
