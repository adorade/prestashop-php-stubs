<?php

namespace PrestaShop\PrestaShop\Core\Form;

/**
 * Symfony forms data provider.
 */
interface FormDataProviderInterface
{
    /**
     * @return array the form data as an associative array
     */
    public function getData();
    /**
     * Persists form Data in Database and Filesystem.
     *
     * @param array $data
     *
     * @return array $errors if data can't persisted an array of errors messages
     *
     * @throws UndefinedOptionsException
     */
    public function setData(array $data);
}
