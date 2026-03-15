<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter;

interface PresenterInterface
{
    /**
     * @param mixed $object
     *
     * @return array|AbstractLazyArray
     */
    public function present($object);
}
