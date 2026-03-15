<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * Handles SendProcessOrderEmail command using legacy object model
 */
class SendProcessOrderEmailHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\SendProcessOrderEmailHandlerInterface
{
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \Link $contextLink)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\SendProcessOrderEmailCommand $command): void
    {
    }
}
