<?php

namespace PrestaShopBundle\Form\Admin\Improve\Design\Theme;

/**
 * Class AdaptToRTLLanguagesType is used as a form to select theme to adapt Right-to-Left languages.
 */
class AdaptThemeToRTLLanguagesType extends \Symfony\Component\Form\AbstractType
{
    /**
     * @param string[] $themeChoices
     */
    public function __construct(array $themeChoices)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
