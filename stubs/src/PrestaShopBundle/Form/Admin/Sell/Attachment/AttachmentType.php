<?php

namespace PrestaShopBundle\Form\Admin\Sell\Attachment;

/**
 * Backwards compatibility break introduced in 1.7.8.0 due to extension of TranslationAwareType instead of using trait
 *
 * Attachment form type definition
 */
class AttachmentType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
