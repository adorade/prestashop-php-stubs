<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Provides individual tax choices (id => "name (rate%)").
 */
final class TaxByIdChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    public function __construct(private readonly \Doctrine\DBAL\Connection $connection, private readonly string $dbPrefix, private readonly int $langId)
    {
    }
    /**
     * @return array<string, int>
     */
    public function getChoices(): array
    {
    }
}
