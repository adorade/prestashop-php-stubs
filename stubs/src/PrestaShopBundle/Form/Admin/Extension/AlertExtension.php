<?php

namespace PrestaShopBundle\Form\Admin\Extension;

/**
 * Adds the "alert_message" option to all Form Types.
 *
 * You can use it together with the UI kit form theme to add alter message to your field
 */
class AlertExtension extends \Symfony\Component\Form\AbstractTypeExtension
{
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
    public static function getExtendedTypes(): iterable
    {
    }
}
