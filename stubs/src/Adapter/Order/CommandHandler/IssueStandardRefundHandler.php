<?php

namespace PrestaShop\PrestaShop\Adapter\Order\CommandHandler;

/**
 * @internal
 */
class IssueStandardRefundHandler extends \PrestaShop\PrestaShop\Adapter\Order\CommandHandler\AbstractOrderCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Order\CommandHandler\IssueStandardRefundHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     * @param \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderRefundCalculator $orderRefundCalculator
     * @param \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderSlipCreator $orderSlipCreator
     * @param \PrestaShop\PrestaShop\Adapter\Order\Refund\VoucherGenerator $voucherGenerator
     * @param \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderRefundUpdater $refundUpdater
     * @param \PrestaShop\PrestaShop\Adapter\ContextStateManager $contextStateManager
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
