<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Interface for services that provide data for identifiable object forms.
 */
interface FormDataProviderInterface
{
    /**
     * Get form data for given object with given id.
     *
     * @param int $id
     *
     * @return mixed
     */
    public function getData($id);
    /**
     * Get default form data.
     *
     * @return mixed
     */
    public function getDefaultData();
}
