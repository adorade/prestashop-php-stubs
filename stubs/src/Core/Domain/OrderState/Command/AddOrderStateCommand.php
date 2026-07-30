<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\Command;

/**
 * Adds new order state with provided data
 */
class AddOrderStateCommand
{
    /**
     * @param string[] $localizedNames
     * @param string[] $localizedTemplates
     */
    public function __construct(array $localizedNames, string $color, bool $loggable, bool $invoice, bool $hidden, bool $sendEmail, bool $pdfInvoice, bool $pdfDelivery, bool $shipped, bool $paid, bool $delivery, array $localizedTemplates)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames()
    {
    }
    /**
     * @param string[] $localizedNames
     *
     * @return $this
     *
     * @throws OrderStateConstraintException
     */
    public function setLocalizedNames(array $localizedNames)
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
     * @return string[]
     */
    public function getLocalizedTemplates()
    {
    }
}
