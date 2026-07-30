<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\ProductPreferences;

/**
 * Class manages the data manipulated using forms
 * in "Configure > Shop Parameters > Product Settings" page.
 */
class ProductPreferencesFormHandler extends \PrestaShop\PrestaShop\Core\Form\Handler
{
    /**
     * {@inheritdoc}
     */
    public function save(array $data)
    {
    }
    /**
     * Inject the cache clearer if needed.
     *
     * @param CacheClearerInterface $cacheClearer the Cache clearer
     */
    public function setCacheClearer(\PrestaShop\PrestaShop\Core\Cache\Clearer\CacheClearerInterface $cacheClearer)
    {
    }
}
