<?php

namespace PrestaShop\PrestaShop\Adapter\Alias\CommandHandler;

/**
 * Handles command which deletes aliases related to search term in bulk action
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class BulkDeleteSearchTermsAliasesHandler extends \PrestaShop\PrestaShop\Core\Domain\AbstractBulkCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Alias\CommandHandler\BulkDeleteSearchTermsAliasesHandlerInterface
{
    public function __construct(protected \PrestaShop\PrestaShop\Adapter\Alias\Repository\AliasRepository $aliasRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Alias\Command\BulkDeleteSearchTermsAliasesCommand $command): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Alias\ValueObject\SearchTerm $term
     * @param mixed $command
     *
     * @return void
     */
    protected function handleSingleAction(mixed $term, mixed $command): void
    {
    }
    /**
     * {@inheritDoc}
     */
    protected function buildBulkException(array $caughtExceptions): \PrestaShop\PrestaShop\Core\Domain\Exception\BulkCommandExceptionInterface
    {
    }
    /**
     * {@inheritDoc}
     */
    protected function supports(mixed $term): bool
    {
    }
}
