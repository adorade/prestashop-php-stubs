<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
final class CancelOrderProductHandler extends \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\AbstractOrderCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\CancelOrderProductHandlerInterface
{
    /**
     * CancelOrderProductHandler constructor.
     *
     * @param \PrestaShop\PrestaShop\Adapter\Order\OrderProductQuantityUpdater $orderProductQuantityUpdater
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Order\OrderProductQuantityUpdater $orderProductQuantityUpdater, \Psr\Log\LoggerInterface $logger, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * Legacy code for product cancellation handling in order page
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\CancelOrderProductCommand $command)
    {
    }
}
