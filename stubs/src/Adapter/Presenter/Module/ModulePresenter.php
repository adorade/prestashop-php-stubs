<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Module;

class ModulePresenter implements \PrestaShop\PrestaShop\Adapter\Presenter\PresenterInterface
{
    public function __construct(\Currency $currency, \PrestaShop\PrestaShop\Adapter\Product\PriceFormatter $priceFormatter)
    {
    }
    /**
     * @param ModuleInterface $module
     *
     * @return array
     */
    public function present($module)
    {
    }
    /**
     * Transform a collection of addons as a simple array of data.
     *
     * @param ModuleCollection|array $modules
     *
     * @return array
     */
    public function presentCollection($modules)
    {
    }
}
