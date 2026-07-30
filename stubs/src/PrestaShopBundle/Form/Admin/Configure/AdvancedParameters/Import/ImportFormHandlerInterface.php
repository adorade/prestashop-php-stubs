<?php

namespace PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import;

/**
 * Interface ImportFormHandlerInterface describes an import form handler.
 */
interface ImportFormHandlerInterface
{
    /**
     * Get the import form.
     *
     * @param ImportConfigInterface $importConfig
     *
     * @return mixed
     */
    public function getForm(\PrestaShop\PrestaShop\Core\Import\Configuration\ImportConfigInterface $importConfig);
    /**
     * Save the form's data.
     *
     * @param array $data
     *
     * @return array of errors
     */
    public function save(array $data);
}
