<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Exception;

/**
 * Thrown when failed to send email associated with order
 */
class OrderEmailSendException extends \PrestaShop\PrestaShop\Core\Domain\Order\Exception\OrderException
{
    /**
     * When order email resending failed
     */
    public const FAILED_RESEND = 1;
    /**
     * When order process email sending failed
     */
    public const FAILED_SEND_PROCESS_ORDER = 2;
}
