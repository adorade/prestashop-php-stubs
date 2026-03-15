<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
class IssueStandardRefundHandler extends \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\AbstractOrderCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\IssueStandardRefundHandlerInterface
{
    /**
     * @param ConfigurationInterface $configuration
     * @param OrderRefundCalculator $orderRefundCalculator
     * @param OrderSlipCreator $orderSlipCreator
     * @param VoucherGenerator $voucherGenerator
     * @param OrderRefundUpdater $refundUpdater
     * @param ContextStateManager $contextStateManager
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderRefundCalculator $orderRefundCalculator, \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderSlipCreator $orderSlipCreator, \PrestaShop\PrestaShop\Adapter\Order\Refund\VoucherGenerator $voucherGenerator, \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderRefundUpdater $refundUpdater, \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Order\Command\IssueStandardRefundCommand $command): void
    {
    }
}
