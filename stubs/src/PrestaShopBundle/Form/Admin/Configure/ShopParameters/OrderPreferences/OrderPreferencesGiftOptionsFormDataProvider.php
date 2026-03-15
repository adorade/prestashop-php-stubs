<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\OrderPreferences;

/**
 * Class is responsible of managing the data manipulated using forms
 * in "Configure > Shop Parameters > Order Settings" page.
 */
class OrderPreferencesGiftOptionsFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Order\GiftOptionsConfiguration $giftOptionsConfiguration, \Symfony\Contracts\Translation\TranslatorInterface $translator)
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
