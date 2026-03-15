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
     * @param \TaxConfiguration|null $taxConfiguration
     */
    public function __construct(\Context $context, \TaxConfiguration $taxConfiguration = \null)
    {
    }
    /**
     * Get presentation settings.
     *
     * @return ProductPresentationSettings
     */
    public function getPresentationSettings()
    {
    }
    /**
     * Get presenter.
     *
     * @return ProductListingPresenter|ProductPresenter
     */
    public function getPresenter()
    {
    }
}
