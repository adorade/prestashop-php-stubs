<?php

namespace PrestaShop\PrestaShop\Adapter\Webservice;

/**
 * Class WebserviceKeyEraser is responsible for deleting the records from webservice account table.
 */
final class WebserviceKeyEraser
{
    /**
     * Erase given webservice accounts.
     *
     * @param int[] $webServiceKeyIds
     *
     * @return array<int, array<string, array|string>> - array of errors. If array is empty then erase operation succeeded.
     *
     * @throws \PrestaShopException
     */
    public function erase(array $webServiceKeyIds)
    {
    }
}
