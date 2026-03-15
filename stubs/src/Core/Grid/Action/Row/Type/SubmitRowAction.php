<?php

namespace PrestaShop\PrestaShop\Core\Grid\Action\Row\Type;

/**
 * Defines row action as form submit.
 */
final class SubmitRowAction extends \PrestaShop\PrestaShop\Core\Grid\Action\Row\AbstractRowAction
{
    public const MESSAGE_TYPE_STATIC = 'static';
    // Static confirmation message type is standard confirmation message type
    public const MESSAGE_TYPE_DYNAMIC = 'dynamic';
    // Dynamic confirmation message type enables dynamic confirmation message
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isApplicable(array $record)
    {
    }
}
