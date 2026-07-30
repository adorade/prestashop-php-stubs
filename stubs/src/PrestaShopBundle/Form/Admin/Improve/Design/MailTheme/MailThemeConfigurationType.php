<?php

namespace PrestaShopBundle\Form\Admin\Improve\Design\MailTheme;

/**
 * Class MailThemeConfigurationType is used to create the form allowing to define mail
 * theme settings (for now just the defaultTheme).
 */
class MailThemeConfigurationType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param array $mailThemes
     */
    public function __construct(array $mailThemes)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
