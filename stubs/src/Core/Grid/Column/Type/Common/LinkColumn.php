<?php

namespace PrestaShop\PrestaShop\Core\Grid\Column\Type\Common;

/**
 * Class LinkColumn is used to define a column in which there is a link targeting an action route (view, edit, add...).
 *
 * Example:
 * new LinkColumn('name'))
 *  ->setName('Name')
 *   ->setOptions([
 *       'field' => 'name',
 *       'route' => 'admin_edit',
 *       'route_param_name' => 'myId',
 *       'route_param_field' => 'id',
 *   ])
 */
final class LinkColumn extends \PrestaShop\PrestaShop\Core\Grid\Column\AbstractColumn
{
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
    }
}
