<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shipment\QueryResult;

class OrderShipment
{
    public function __construct(int $id, int $orderId, \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\CarrierSummary $carrierSummary, int $addressId, \PrestaShop\Decimal\DecimalNumber $shippingCostTaxExcluded, \PrestaShop\Decimal\DecimalNumber $shippingCostTaxIncluded, int $productsCount, ?string $trackingNumber, ?\DateTime $packedAt, ?\DateTime $shippedAt, ?\DateTime $deliveredAt, ?\DateTime $cancelledAt)
    {
    }
    /**
     * @return int
     */
    public function getId(): int
    {
    }
    /**
     * @return int
     */
    public function getOrderId(): int
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\CarrierSummary
     */
    public function getCarrierSummary(): \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\CarrierSummary
    {
    }
    /**
     * @return int
     */
    public function getAddressId(): int
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getShippingCostTaxExcluded(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getShippingCostTaxIncluded(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return string
     */
    public function getTrackingNumber(): ?string
    {
    }
    /**
     * @return \DateTime
     */
    public function getPackedAt(): ?\DateTime
    {
    }
    /**
     * @return \DateTime
     */
    public function getShippedAt(): ?\DateTime
    {
    }
    /**
     * @return \DateTime
     */
    public function getDeliveredAt(): ?\DateTime
    {
    }
    /**
     * @return \DateTime
     */
    public function getCancelledAt(): ?\DateTime
    {
    }
    /**
     * @return int
     */
    public function getProductsCount(): int
    {
    }
}
