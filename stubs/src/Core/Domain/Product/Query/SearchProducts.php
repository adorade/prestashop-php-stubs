<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Query;

/**
 * Queries for products by provided search phrase
 */
class SearchProducts
{
    /**
     * @param string $phrase
     * @param int $resultsLimit
     * @param string $isoCode
     * @param int|null $orderId
     *
     * @throws ProductSearchEmptyPhraseException
     * @throws CurrencyConstraintException
     */
    public function __construct(string $phrase, int $resultsLimit, string $isoCode, ?int $orderId = null)
    {
    }
    /**
     * @return AlphaIsoCode
     */
    public function getAlphaIsoCode(): \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\AlphaIsoCode
    {
    }
    /**
     * @return string
     */
    public function getPhrase()
    {
    }
    /**
     * @return int
     */
    public function getResultsLimit(): int
    {
    }
    /**
     * @return OrderId|null
     */
    public function getOrderId(): ?\PrestaShop\PrestaShop\Core\Domain\Order\ValueObject\OrderId
    {
    }
}
