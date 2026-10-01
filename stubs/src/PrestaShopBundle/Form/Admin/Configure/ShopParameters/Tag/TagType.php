<?php

namespace PrestaShopBundle\Form\Admin\Configure\ShopParameters\Tag;

/**
 * Class TagType
 */
class TagType extends \Symfony\Component\Form\AbstractType
{
    use \PrestaShopBundle\Translation\TranslatorAwareTrait;
    /**
     * @param array $languagesChoices
     */
    public function __construct(array $languagesChoices, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
    }
}
