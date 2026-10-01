<?php

class OrderReturnStateCore extends \ObjectModel
{
    /** @var string|array<int, string> Name */
    public $name;
    /** @var string Display state in the specified color */
    public $color;
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = ['table' => 'order_return_state', 'primary' => 'id_order_return_state', 'multilang' => \true, 'fields' => [
        'color' => ['type' => self::TYPE_STRING, 'validate' => 'isColor', 'size' => 32],
        /* Lang fields */
        'name' => ['type' => self::TYPE_STRING, 'lang' => \true, 'validate' => 'isGenericName', 'required' => \true, 'size' => \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\OrderReturnStateSettings::NAME_MAX_LENGTH],
    ]];
    /**
     * Get all available order statuses.
     *
     * @param int $id_lang Language id for status name
     *
     * @return array Order statuses
     */
    public static function getOrderReturnStates($id_lang)
    {
    }
}
