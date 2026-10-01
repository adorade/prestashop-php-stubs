<?php

/**
 * Class ProductPresenterFactoryCore.
 */
class ProductPresenterFactoryCore
{
    /**
     * ProductPresenterFactoryCore constructor.
     *
     * @param Context $context
     * @param TaxConfiguration|null $taxConfiguration
     */
    public function __construct(\Context $context, ?\TaxConfiguration $taxConfiguration = \null)
    {
    }
    /**
     * Get presentation settings.
     *
     * @return \PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings
     */
    public function getPresentationSettings()
    {
    }
    /**
     * Get presenter.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Presenter\Product\ProductListingPresenter|\PrestaShop\PrestaShop\Adapter\Presenter\Product\ProductPresenter
     */
    public function getPresenter()
    {
    }
}
