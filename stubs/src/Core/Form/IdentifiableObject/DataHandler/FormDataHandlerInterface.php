<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Interface IdentifiableObjectFormDataHandlerInterface.
 */
interface FormDataHandlerInterface
{
    /**
     * Create object from form data.
     *
     * @param array $data
     *
     * @return mixed ID of identifiable object
     */
    public function create(array $data);
    /**
     * Update object with form data.
     *
     * @param int $id
     * @param array $data
     */
    public function update($id, array $data);
}
