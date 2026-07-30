<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Class ImportEntityFieldChoiceProvider is responsible for providing entity import field choices.
 */
final class ImportEntityFieldChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\FormChoiceProviderInterface
{
    /**
     * @param EntityFieldsProviderFinderInterface $entityFieldsProviderFinder
     * @param int $selectedEntity
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Import\EntityField\Provider\EntityFieldsProviderFinderInterface $entityFieldsProviderFinder, $selectedEntity)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices()
    {
    }
}
