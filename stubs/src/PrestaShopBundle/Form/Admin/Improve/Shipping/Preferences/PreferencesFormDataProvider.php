<?php

namespace PrestaShopBundle\Form\Admin\Improve\Shipping\Preferences;

/**
 * Class is responsible of managing the data manipulated using forms
 * in "Improve > Shipping > Preferences" page.
 *
 * @deprecated since 1.7.8, will be removed in the next major version
 */
class PreferencesFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Carrier\HandlingConfiguration $handlingConfiguration, \PrestaShop\PrestaShop\Adapter\Carrier\CarrierOptionsConfiguration $carrierOptionsConfiguration, \Symfony\Contracts\Translation\TranslatorInterface $translator)
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
