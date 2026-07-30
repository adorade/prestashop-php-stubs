<?php

namespace PrestaShopBundle\Form\Admin\Sell\Customer;

/**
 * Class PrivateNoteType is used to add private notes about customer.
 */
class PrivateNoteType extends \Symfony\Component\Form\AbstractType
{
    /**
     * PrivateNoteType constructor.
     *
     * @param TranslatorInterface $translator
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
