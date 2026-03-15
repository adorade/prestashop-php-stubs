<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\ProductPreferences;

/**
 * Class is responsible of managing the data manipulated using forms
 * in "Configure > Shop Parameters > Product Settings" page.
 *
 * @deprecated since 1.7.8, will be removed in the next major version
 */
class ProductPreferencesFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\GeneralConfiguration $generalConfiguration, \PrestaShop\PrestaShop\Adapter\Product\PaginationConfiguration $paginationConfiguration, \PrestaShop\PrestaShop\Adapter\Product\PageConfiguration $pageConfiguration, \PrestaShop\PrestaShop\Adapter\Product\StockConfiguration $stockConfiguration, \Symfony\Contracts\Translation\TranslatorInterface $translator)
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
    /**
     * Perform validation on form data before saving it.
     *
     * @param array $data
     *
     * @return array Returns array of errors
     */
    protected function validate(array $data)
    {
    }
}
