<?php

namespace PrestaShop\PrestaShop\Adapter\OrderState\CommandHandler;

/**
 * Handles commands which edits given order state with provided data.
 *
 * @internal
 */
final class EditOrderStateHandler extends \PrestaShop\PrestaShop\Adapter\OrderState\CommandHandler\AbstractOrderStateHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderState\CommandHandler\EditOrderStateHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderState\Command\EditOrderStateCommand $command)
    {
    }
}
