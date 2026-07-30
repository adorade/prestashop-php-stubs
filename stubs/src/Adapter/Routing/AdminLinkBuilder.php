<?php

namespace PrestaShop\PrestaShop\Adapter\Routing;

/**
 * Class AdminLinkBuilder is able to build entity links based on the Link::getAdminLink
 * method (which indirectly allows it to build symfony url as well).
 */
class AdminLinkBuilder implements \PrestaShop\PrestaShop\Core\Routing\EntityLinkBuilderInterface
{
    /**
     * This class can manage entities based on the $entityControllers parameter,
     * you need to specify an array map with then entity/table short name and its
     * associated legacy controller:
     * e.g. $entityControllers = [
     *  'product' => 'AdminProducts',
     *  'customer' => 'AdminCustomers',
     * ];
     *
     * @param Link $link Link class that generates links
     * @param array $entityControllers List of entities with appropriate controller
     */
    public function __construct(\Link $link, array $entityControllers)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getViewLink($entity, array $parameters)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getEditLink($entity, array $parameters)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function canBuild($entity)
    {
    }
}
