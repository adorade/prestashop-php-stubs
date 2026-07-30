<?php

namespace PrestaShopBundle\Form\Admin\Extension;

/**
 * Adds the "external_link" option to all Form Types.
 *
 * You can use it together with the UI kit form theme to add external links:
 *
 * ```
 * 'external_link' => [
 *   'link' => 'foo bar',
 *   'text' => 'foo bar',
 * ],
 * ```
 */
class ExternalLinkExtension extends \Symfony\Component\Form\AbstractTypeExtension
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
