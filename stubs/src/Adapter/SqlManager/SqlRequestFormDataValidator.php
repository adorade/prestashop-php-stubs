<?php

namespace PrestaShop\PrestaShop\Adapter\SqlManager;

/**
 * Class SqlRequestFormDataValidator validates SqlRequest data that is submitted via from.
 *
 * @internal
 *
 * @deprecated Since 1.7.7.5 and will be removed in the next major.
 */
class SqlRequestFormDataValidator
{
    /**
     * @param SqlQueryValidator $sqlQueryValidator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\SqlManager\SqlQueryValidator $sqlQueryValidator)
    {
    }
    /**
     * Validate SqlRequest form data.
     *
     * @param array $data
     *
     * @return array Errors if any
     */
    public function validate(array $data)
    {
    }
}
