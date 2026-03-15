<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import;

/**
 * Interface ImportFormDataProviderInterface describes a data provider for import forms.
 */
interface ImportFormDataProviderInterface
{
    /**
     * Get form's data.
     *
     * @param ImportConfigInterface $importConfig
     *
     * @return array
     */
    public function getData(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig);
    /**
     * Save the form's data.
     *
     * @param array $data
     *
     * @return array of errors, if occurred
     */
    public function setData(array $data);
}
