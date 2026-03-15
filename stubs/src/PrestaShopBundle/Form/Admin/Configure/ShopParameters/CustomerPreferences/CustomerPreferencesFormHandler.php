<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\CustomerPreferences;

/**
 * Class manages "Configure > Shop Parameters > Customer Settings" page
 * form handling.
 */
final class CustomerPreferencesFormHandler extends \PrestaShop\PrestaShop\Core\Form\Handler
{
    /**
     * {@inheritdoc}
     */
    public function save(array $data)
    {
    }
    /**
     * @param TabRepository $tabRepository
     */
    public function setTabRepository(\PrestaShopBundle\Entity\Repository\TabRepository $tabRepository)
    {
    }
}
