<?php

namespace PrestaShop\PrestaShop\Adapter\Group;

/**
 * This class will provide data from DB / ORM about Group.
 */
class GroupDataProvider
{
    /**
     * Return available groups.
     *
     * @param int $id_lang
     * @param bool $id_shop
     *
     * @return array Groups
     */
    public function getGroups($id_lang, $id_shop = false)
    {
    }
    /**
     * Return current group object
     * Use context.
     *
     * @return Group Group object
     */
    public static function getCurrent()
    {
    }
    public function getAllGroupIds(): array
    {
    }
}
