<?php

namespace PrestaShop\PrestaShop\Core\Domain\Notification\QueryResult;

/**
 * NotificationResult contains the notification data
 */
class NotificationResult
{
    /**
     * @var string
     */
    protected $customerThreadViewUrl;
    /**
     * @var string
     */
    protected $orderViewUrl;
    /**
     * NotificationResult constructor.
     *
     * @param int $orderId
     * @param int $customerId
     * @param string $customerName
     * @param int $customerMessageId
     * @param int $customerThreadId
     * @param string $customerViewUrl
     * @param string $totalPaid
     * @param string $carrier
     * @param string $isoCode
     * @param string $company
     * @param string $status
     * @param string $dateAdd
     * @param string $customerThreadViewUrl
     * @param string $orderViewUrl
     */
    public function __construct(int $orderId, int $customerId, string $customerName, int $customerMessageId, int $customerThreadId, string $customerViewUrl, string $totalPaid, string $carrier, string $isoCode, string $company, string $status, string $dateAdd, string $customerThreadViewUrl, string $orderViewUrl)
    {
    }
    /**
     * @return int
     */
    public function getOrderId(): int
    {
    }
    /**
     * @return int
     */
    public function getCustomerId(): int
    {
    }
    /**
     * @return string
     */
    public function getCustomerName(): string
    {
    }
    /**
     * @return int
     */
    public function getCustomerMessageId(): int
    {
    }
    /**
     * @return int
     */
    public function getCustomerThreadId(): int
    {
    }
    /**
     * @return string
     */
    public function getCustomerViewUrl(): string
    {
    }
    /**
     * @return string
     */
    public function getTotalPaid(): string
    {
    }
    /**
     * @return string
     */
    public function getCarrier(): string
    {
    }
    /**
     * @return string
     */
    public function getIsoCode(): string
    {
    }
    /**
     * @return string
     */
    public function getCompany(): string
    {
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
    }
    /**
     * @return string
     */
    public function getDateAdd(): string
    {
    }
    /**
     * @return string
     */
    public function getCustomerThreadViewUrl(): string
    {
    }
    /**
     * @return string
     */
    public function getOrderViewUrl(): string
    {
    }
}
