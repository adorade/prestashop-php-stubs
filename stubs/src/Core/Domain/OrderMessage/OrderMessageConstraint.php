<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderMessage;

/**
 * Defines constraints for Order message attributes
 */
class OrderMessageConstraint
{
    public const MAX_NAME_LENGTH = 128;
    public const MAX_MESSAGE_LENGTH = 1200;
}
