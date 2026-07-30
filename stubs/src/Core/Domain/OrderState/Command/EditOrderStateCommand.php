<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\Command;

/**
 * Edits provided order state.
 * It can edit either all or partial data.
 *
 * Only not-null values are considered when editing order state.
 * For example, if the name is null, then the original value is not modified,
 * however, if name is set, then the original value will be overwritten.
 */
class EditOrderStateCommand
{
    /**
     * @param int $orderStateId
     */
    public function __construct($orderStateId)
    {
    }
    /**
     * @return OrderStateId
     */
    public function getOrderStateId()
    {
    }
    /**
     * @return array<string>|null
     */
    public function getName()
    {
    }
    /**
     * @param array<string> $name
     *
     * @return self
     */
    public function setName($name)
    {
    }
    /**
     * @return string|null
     */
    public function getColor()
    {
    }
    /**
     * @return self
     */
    public function setColor(?string $color)
    {
    }
    /**
     * @return bool|null
     */
    public function isLoggable()
    {
    }
    /**
     * @return self
     */
    public function setLoggable(?bool $loggable)
    {
    }
    /**
     * @return bool|null
     */
    public function isInvoice()
    {
    }
    /**
     * @return self
     */
    public function setInvoice(?bool $invoice)
    {
    }
    /**
     * @return bool|null
     */
    public function isHidden()
    {
    }
    /**
     * @return self
     */
    public function setHidden(?bool $hidden)
    {
    }
    /**
     * @return bool|null
     */
    public function isSendEmailEnabled()
    {
    }
    /**
     * @return self
     */
    public function setSendEmail(?bool $sendEmail)
    {
    }
    /**
     * @return bool|null
     */
    public function isPdfInvoice()
    {
    }
    /**
     * @return self
     */
    public function setPdfInvoice(?bool $pdfInvoice)
    {
    }
    /**
     * @return bool|null
     */
    public function isPdfDelivery()
    {
    }
    /**
     * @return self
     */
    public function setPdfDelivery(?bool $pdfDelivery)
    {
    }
    /**
     * @return bool|null
     */
    public function isShipped()
    {
    }
    /**
     * @return self
     */
    public function setShipped(?bool $shipped)
    {
    }
    /**
     * @return bool|null
     */
    public function isPaid()
    {
    }
    /**
     * @return self
     */
    public function setPaid(?bool $paid)
    {
    }
    /**
     * @return bool|null
     */
    public function isDelivery()
    {
    }
    /**
     * @return self
     */
    public function setDelivery(?bool $delivery)
    {
    }
    /**
     * @return array|null
     */
    public function getTemplate()
    {
    }
    /**
     * @return self
     */
    public function setTemplate(?array $template)
    {
    }
}
