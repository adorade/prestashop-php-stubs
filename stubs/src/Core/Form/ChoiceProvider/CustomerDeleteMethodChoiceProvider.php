<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Provides choices in which customer can be deleted.
 */
final class CustomerDeleteMethodChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
