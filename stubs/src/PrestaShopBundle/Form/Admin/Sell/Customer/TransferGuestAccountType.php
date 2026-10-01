<?php

namespace PrestaShopBundle\Form\Admin\Sell\Customer;

/**
 * Class TransferGuestAccountType is type used to submit guest customer transformation
 * into actual customer with password.
 */
class TransferGuestAccountType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
