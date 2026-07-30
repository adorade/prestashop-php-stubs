<?php

namespace PrestaShop\PrestaShop\Core\Domain\CmsPageCategory\QueryResult;

/**
 * Transfers CMS Page Categories used for breadrumb
 */
class Breadcrumb implements \IteratorAggregate
{
    /**
     * @param BreadcrumbItem[] $cmsPageCategories
     */
    public function __construct(array $cmsPageCategories)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getIterator(): \Traversable
    {
    }
}
