<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Provides human-readable choices for ExtraPropertyType, shared by the extra property
 * definition form and grid filter so the translated labels are not duplicated.
 */
final class ExtraPropertyTypeChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    public function __construct(private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices(): array
    {
    }
}
