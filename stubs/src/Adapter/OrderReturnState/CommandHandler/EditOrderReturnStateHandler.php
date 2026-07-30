<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturnState\CommandHandler;

/**
 * Handles commands which edits given order return state with provided data.
 *
 * @internal
 */
final class EditOrderReturnStateHandler extends \PrestaShop\PrestaShop\Adapter\OrderReturnState\CommandHandler\AbstractOrderReturnStateHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\CommandHandler\EditOrderReturnStateHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Command\EditOrderReturnStateCommand $command)
    {
    }
}
