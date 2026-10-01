<?php

namespace PrestaShopBundle\Form\Extension;

/**
 * Appends alert messages from session flashbag to form vars.
 *
 * Usage example: when form is rendered in iframe modal, success alerts allows identifying if it was rendered after
 * successful redirect. This way we can automatically close the modal knowing that the action was successful.
 */
class AlertsTrackingExtension extends \Symfony\Component\Form\AbstractTypeExtension
{
    /**
     * @param \Symfony\Component\HttpFoundation\RequestStack $requestStack
     */
    public function __construct(private readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack)
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
