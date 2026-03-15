<?php

namespace PrestaShopBundle\Form\Admin\Sell\Address;

/**
 * Defines form for address required fields modification (Sell > Customers > Addresses)
 */
class RequiredFieldsAddressType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param FormChoiceProviderInterface $addressRequiredFieldsChoicesProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface $addressRequiredFieldsChoicesProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
