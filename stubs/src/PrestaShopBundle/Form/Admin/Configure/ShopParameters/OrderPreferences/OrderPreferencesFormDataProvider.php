<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\OrderPreferences;

/**
 * Class is responsible of managing the data manipulated using forms
 * in "Configure > Shop Parameters > Order Settings" page.
 *
 * @deprecated since 1.7.8, will be removed in the next major version
 */
class OrderPreferencesFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Order\GeneralConfiguration $generalConfiguration, \PrestaShop\PrestaShop\Adapter\Order\GiftOptionsConfiguration $giftOptionsConfiguration, \Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\CMS\CMSDataProvider $cmsDataProvider)
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
