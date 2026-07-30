<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\QueryResult;

/**
 * Stores editable data for order state
 */
class EditableOrderState
{
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\OrderState\ValueObject\OrderStateId $orderStateId, array $name, string $color, bool $loggable, bool $invoice, bool $hidden, bool $sendEmail, bool $pdfInvoice, bool $pdfDelivery, bool $shipped, bool $paid, bool $delivery, array $localizedTemplates, bool $isDeleted)
    {
    }
    /**
     * @return OrderStateId
     */
    public function getOrderStateId()
    {
    }
    /**
     * @return array
     */
    public function getLocalizedNames()
    {
    }
    /**
     * @return string
     */
    public function getColor()
    {
    }
    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
    }
    /**
     * @return bool
     */
    public function isLoggable()
    {
    }
    /**
     * @return bool
     */
    public function isInvoice()
    {
    }
    /**
     * @return bool
     */
    public function isHidden()
    {
    }
    /**
     * @return bool
     */
    public function isSendEmailEnabled()
    {
    }
    /**
     * @return bool
     */
    public function isPdfInvoice()
    {
    }
    /**
     * @return bool
     */
    public function isPdfDelivery()
    {
    }
    /**
     * @return bool
     */
    public function isShipped()
    {
    }
    /**
     * @return bool
     */
    public function isPaid()
    {
    }
    /**
     * @return bool
     */
    public function isDelivery()
    {
    }
    /**
     * @return array
     */
    public function getLocalizedTemplates()
    {
    }
}
