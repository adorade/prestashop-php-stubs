<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

class BulkCombinationFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * We return values matching the empty state of each field, this way they will be disabled by default.
     *
     * @return array
     */
    public function getDefaultData()
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getData($id)
    {
    }
}
