<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception;

/**
 * Refuses a removal that would leave a merchandise return with zero product lines.
 *
 * Mirrors the legacy guard in AdminReturnController::postProcess (`countProduct() > 1`).
 */
class CannotDeleteLastProductFromOrderReturnException extends \PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception\OrderReturnException
{
}
