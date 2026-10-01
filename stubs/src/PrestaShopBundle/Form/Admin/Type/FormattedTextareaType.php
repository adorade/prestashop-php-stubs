<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * Class enabling TinyMCE on a Textarea field.
 */
class FormattedTextareaType extends \PrestaShopBundle\Form\Admin\Type\TranslatorAwareType
{
    /**
     * Max size of UTF-8 content in MySQL text columns
     */
    public const LIMIT_TINYTEXT_UTF8 = 84;
    public const LIMIT_TEXT_UTF8 = 21844;
    public const LIMIT_MEDIUMTEXT_UTF8 = 5592414;
    public const LIMIT_LONGTEXT_UTF8 = 1431655764;
    /**
     * Max size of UTF-8 MB4 content in MySQL text columns
     */
    public const LIMIT_TINYTEXT_UTF8_MB4 = 63;
    public const LIMIT_TEXT_UTF8_MB4 = 16383;
    public const LIMIT_MEDIUMTEXT_UTF8_MB4 = 4194303;
    public const LIMIT_LONGTEXT_UTF8_MB4 = 1073741823;
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
    }
}
