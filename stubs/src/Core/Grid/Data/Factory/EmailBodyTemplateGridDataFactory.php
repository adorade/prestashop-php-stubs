<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

final class EmailBodyTemplateGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\MailTemplate\EmailBodyTemplateRepository $repository, private readonly string $defaultLocale)
    {
    }
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria): \PrestaShop\PrestaShop\Core\Grid\Data\GridData
    {
    }
}
