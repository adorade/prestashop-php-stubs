<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
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
     * getActiveLastElements returns all allowed notifications in the backoffice
     * Get allowed notifications.
     *
     * @return array containing the notifications
     */
    public function getActiveLastElements(): array
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
