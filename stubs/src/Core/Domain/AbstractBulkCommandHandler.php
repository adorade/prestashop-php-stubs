<?php

namespace PrestaShop\PrestaShop\Core\Domain;

abstract class AbstractBulkCommandHandler
{
    /**
     * @var \Throwable[]
     */
    protected $exceptions;
    /**
     * @param array $ids
     * @param string $exceptionToCatch when cought this exception will allow the loop to continue
     *                                 and show bulk error at the end of the loop, instead of breaking it on first error.
     *                                 All other exceptions will cause the loop to immediately stop and throw the exception.
     * @param mixed|null $command It can be null or any command that is used by the command handler. It is drilled through
     *                            method parameters to deliver other command variables than entity ids.
     */
    protected function handleBulkAction(array $ids, string $exceptionToCatch, mixed $command = null): void
    {
    }
    /**
     * @param \Throwable[] $caughtExceptions
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Exception\BulkCommandExceptionInterface
     */
    abstract protected function buildBulkException(array $caughtExceptions): \PrestaShop\PrestaShop\Core\Domain\Exception\BulkCommandExceptionInterface;
    /**
     * @param mixed $id
     * @param mixed|null $command
     */
    abstract protected function handleSingleAction(mixed $id, mixed $command): void;
    /**
     * Should return true if provided $id type is supported by actions, false otherwise
     *
     * @param mixed $id
     *
     * @return bool
     */
    abstract protected function supports($id): bool;
}
