<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataFormatter;

/**
 * This class transforms the data from list form into data adapted to the combination form structure,
 * since the forms are not constructed the same way the goal is to rebuild the same data values with the
 * right property path. When the data is not detected it is not included in the formatted data.
 */
class CombinationListFormDataFormatter extends \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataFormatter\AbstractFormDataFormatter
{
    /**
     * @param array<string, mixed> $formData
     *
     * @return array<string, mixed>
     */
    public function format(array $formData): array
    {
    }
}
