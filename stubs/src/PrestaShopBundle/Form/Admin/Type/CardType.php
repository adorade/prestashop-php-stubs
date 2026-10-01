<?php

namespace PrestaShopBundle\Form\Admin\Type;

/**
 * This form type is used as a container for sub forms, it will be displayed as a Bootstrap card,
 * its label is used as the card title and its children are displayed in the card body.
 *
 * Optional 'icon' option: a Material icon name (e.g. 'storage') displayed before the card title.
 */
class CardType extends \Symfony\Component\Form\AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildView(\Symfony\Component\Form\FormView $view, \Symfony\Component\Form\FormInterface $form, array $options): void
    {
    }
}
