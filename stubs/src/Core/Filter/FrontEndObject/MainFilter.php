<?php

namespace PrestaShop\PrestaShop\Core\Filter\FrontEndObject;

/**
 * Filters the main front end object ("prestashop" on your javascript console).
 */
class MainFilter implements \PrestaShop\PrestaShop\Core\Filter\FilterInterface
{
    /**
     * @param array $filters FilterInterface[] filters, indexed by key to filter
     */
    public function __construct(array $filters)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public function filter($subject)
    {
    }
    /**
     * @return FilterInterface[] filters, indexed by key to filter
     */
    public function getFilters()
    {
    }
}
