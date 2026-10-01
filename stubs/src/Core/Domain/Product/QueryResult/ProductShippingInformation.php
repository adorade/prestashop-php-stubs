<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Transfers product shipping information data
 */
class ProductShippingInformation
{
    /**
     * @param \PrestaShop\Decimal\DecimalNumber $width
     * @param \PrestaShop\Decimal\DecimalNumber $height
     * @param \PrestaShop\Decimal\DecimalNumber $depth
     * @param \PrestaShop\Decimal\DecimalNumber $weight
     * @param \PrestaShop\Decimal\DecimalNumber $additionalShippingCost
     * @param int[] $carrierReferences
     * @param int $deliveryTimeNotesType
     * @param string[] $localizedDeliveryTimeInStockNotes
     * @param string[] $localizedDeliveryTimeOutOfStockNotes
     */
    public function __construct(\PrestaShop\Decimal\DecimalNumber $width, \PrestaShop\Decimal\DecimalNumber $height, \PrestaShop\Decimal\DecimalNumber $depth, \PrestaShop\Decimal\DecimalNumber $weight, \PrestaShop\Decimal\DecimalNumber $additionalShippingCost, array $carrierReferences, int $deliveryTimeNotesType, array $localizedDeliveryTimeInStockNotes, array $localizedDeliveryTimeOutOfStockNotes)
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getWidth(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getHeight(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getDepth(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getWeight(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return \PrestaShop\Decimal\DecimalNumber
     */
    public function getAdditionalShippingCost(): \PrestaShop\Decimal\DecimalNumber
    {
    }
    /**
     * @return int[]
     */
    public function getCarrierReferences(): array
    {
    }
    /**
     * @return int
     */
    public function getDeliveryTimeNoteType(): int
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedDeliveryTimeInStockNotes(): array
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedDeliveryTimeOutOfStockNotes(): array
    {
    }
}
