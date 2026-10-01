<?php

namespace PrestaShop\PrestaShop\Core\Domain\MailTemplate\QueryHandler;

interface GetEmailBodyTemplatesForListingHandlerInterface
{
    /**
     * Returns an array of email body templates for the given locale.
     *
     * @return array<int, array{template_name: string, source: string, module_name: string, has_html: bool, has_txt: bool}>
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\MailTemplate\Query\GetEmailBodyTemplatesForListing $query): array;
}
