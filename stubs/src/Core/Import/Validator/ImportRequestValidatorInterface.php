<?php

namespace PrestaShop\PrestaShop\Core\Import\Validator;

/**
 * Interface ImportRequestValidatorInterface describes a request validator for import process.
 */
interface ImportRequestValidatorInterface
{
    /**
     * Validate a request for import.
     *
     * @param Request $request
     */
    public function validate(\Symfony\Component\HttpFoundation\Request $request);
}
