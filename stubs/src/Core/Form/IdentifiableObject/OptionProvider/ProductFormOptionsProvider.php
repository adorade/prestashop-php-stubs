<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\OptionProvider;

/**
 * Provide dynamic complex options to the product type (like preview data that depend
 * on product current data, or specific options for inputs that are deep in the form
 * structure).
 */
class ProductFormOptionsProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\OptionProvider\FormOptionsProviderInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOptions(int $id, array $data): array
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getDefaultOptions(array $data): array
    {
    }
}
