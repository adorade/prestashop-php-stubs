<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\Repository;

/**
 * Methods to access data source of Currency
 */
class CurrencyRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyNotFoundException
     */
    public function assertCurrencyExists(\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId
     *
     * @return \Currency
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId): \Currency
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId
     *
     * @return string
     */
    public function getIsoCode(\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId $currencyId): string
    {
    }
}
