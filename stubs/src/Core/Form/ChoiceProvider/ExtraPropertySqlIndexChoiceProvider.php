<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Provides human-readable choices for ExtraPropertySqlIndex, shared by the extra property
 * definition form and (potentially) grid filters so the translated labels are not duplicated.
 */
final class ExtraPropertySqlIndexChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
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
