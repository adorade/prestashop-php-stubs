<?php

namespace PrestaShopBundle\Entity\Repository;

class TabRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param string $moduleName
     *
     * @return \PrestaShopBundle\Entity\Tab[]
     */
    public function findByModule($moduleName)
    {
    }
    /**
     * @param int $idParent
     *
     * @return array
     */
    public function findByParentId($idParent)
    {
    }
    /**
     * @param string $className
     *
     * @return \PrestaShopBundle\Entity\Tab|null
     */
    public function findOneByClassName($className)
    {
    }
    public function findOneByRouteName(string $routeName): ?\PrestaShopBundle\Entity\Tab
    {
    }
    /**
     * @param string $className
     *
     * @return int|null
     */
    public function findOneIdByClassName($className)
    {
    }
    /**
     * Changes tab status.
     *
     * @param string $className tab's class name
     * @param bool $status wanted status for the tab
     *
     * @throws \InvalidArgumentException
     */
    public function changeStatusByClassName($className, $status)
    {
    }
    /**
     * @param string $moduleName
     * @param bool $enabled
     */
    public function changeEnabledByModuleName($moduleName, $enabled)
    {
    }
    /**
     * @param string $className
     *
     * @return int
     *
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getIdByClassName(string $className): int
    {
    }
    /**
     * @param int $tabId
     *
     * @return \PrestaShopBundle\Entity\Tab[] breadcrumb to access the Tab, ordered from closest to oldest ancestor
     *
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getAncestors(int $tabId): array
    {
    }
}
