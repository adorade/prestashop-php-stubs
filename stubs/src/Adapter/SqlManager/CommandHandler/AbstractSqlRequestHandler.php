<?php

namespace PrestaShop\PrestaShop\Adapter\SqlManager\CommandHandler;

/**
 * @internal
 */
abstract class AbstractSqlRequestHandler
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\SqlManager\SqlQueryValidator $sqlQueryValidator, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    protected function assertSqlQueryIsValid(string $sql): void
    {
    }
}
