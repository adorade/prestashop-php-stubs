<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */
/**
 * Class NotificationCore.
 */
class NotificationCore
{
    public $types;
    /**
     * NotificationCore constructor.
     */
    public function __construct()
    {
    }
    /**
     * getLastElements return all the notifications (new order, new customer registration, and new customer message)
     * Get all the notifications.
     *
     * @return array containing the notifications
     */
    public function getLastElements()
    {
    }
    /**
     * getLastElementsIdsByType return all the element ids to show (order, customer registration, and customer message)
     * Get all the element ids.
     *
     * @param string $type contains the field name of the Employee table
     * @param int $idLastElement contains the id of the last seen element
     *
     * @return array containing the notifications
     */
    public static function getLastElementsIdsByType($type, $idLastElement)
    {
    }
    /**
     * updateEmployeeLastElement return 0 if the field doesn't exists in Employee table.
     * Updates the last seen element by the employee.
     *
     * @param string $type contains the field name of the Employee table
     *
     * @return bool if type exists or not
     */
    public function updateEmployeeLastElement($type)
    {
    }
}
