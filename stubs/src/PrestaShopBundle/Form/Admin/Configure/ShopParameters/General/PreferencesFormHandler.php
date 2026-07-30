<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\General;

/**
 * This class manages the data manipulated using forms
 * in "Configure > Shop Parameters > General" page.
 */
final class PreferencesFormHandler implements \PrestaShop\PrestaShop\Core\Form\FormHandlerInterface
{
    public function __construct(\Symfony\Component\Form\FormFactoryInterface $formFactory, \PrestaShopBundle\Form\Admin\Configure\ShopParameters\General\PreferencesFormDataProvider $formDataProvider, \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function save(array $data)
    {
    }
}
