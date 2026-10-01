<?php

namespace PrestaShop\PrestaShop\Adapter\MailTemplate\QueryHandler;

/**
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetEmailBodyTemplatesForListingHandler implements \PrestaShop\PrestaShop\Core\Domain\MailTemplate\QueryHandler\GetEmailBodyTemplatesForListingHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\MailTemplate\EmailBodyTemplateRepository $repository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\MailTemplate\Query\GetEmailBodyTemplatesForListing $query): array
    {
    }
}
