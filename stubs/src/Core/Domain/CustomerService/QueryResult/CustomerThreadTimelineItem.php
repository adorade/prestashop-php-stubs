<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryResult;

/**
 * Carries data about single timeline item
 */
class CustomerThreadTimelineItem
{
    /**
     * @param string $content
     * @param string $icon
     * @param string $arrow
     * @param string $date
     * @param string|null $color
     * @param int|null $relatedOrderId
     */
    public function __construct($content, $icon, $arrow, $date, $color = null, $relatedOrderId = null)
    {
    }
    /**
     * @return string
     */
    public function getContent()
    {
    }
    /**
     * @return string
     */
    public function getIcon()
    {
    }
    /**
     * @return string
     */
    public function getArrow()
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
    public function getColor()
    {
    }
    /**
     * @return int|null
     */
    public function getRelatedOrderId()
    {
    }
}
