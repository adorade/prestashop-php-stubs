<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryResult;

/**
 * Carries data for single customer thread message
 */
class CustomerThreadMessage
{
    /**
     * @param string $type
     * @param string $message
     * @param string $date
     * @param string|null $employeeImage
     * @param string|null $employeeName
     * @param string|null $customerName
     * @param string|null $attachmentFile
     * @param int|null $productId
     * @param string|null $productName
     */
    public function __construct($type, $message, $date, $employeeImage, $employeeName, $customerName, $attachmentFile, $productId, $productName)
    {
    }
    /**
     * @return string
     */
    public function getType()
    {
    }
    /**
     * @return string
     */
    public function getMessage()
    {
    }
    /**
     * @return string
     */
    public function getDate()
    {
    }
    /**
     * @return string|null
     */
    public function getEmployeeImage()
    {
    }
    /**
     * @return string|null
     */
    public function getEmployeeName()
    {
    }
    /**
     * @return string|null
     */
    public function getCustomerName()
    {
    }
    /**
     * @return string|null
     */
    public function getAttachmentFile()
    {
    }
    /**
     * @return int|null
     */
    public function getProductId()
    {
    }
    /**
     * @return string|null
     */
    public function getProductName()
    {
    }
}
