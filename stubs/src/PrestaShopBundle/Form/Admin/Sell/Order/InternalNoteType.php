<?php

namespace PrestaShopBundle\Form\Admin\Sell\Order;

/**
 * Class InternalNoteType is used to add internal notes about order.
 */
class InternalNoteType extends \Symfony\Component\Form\AbstractType
{
    /**
     * InternalNoteType constructor.
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
