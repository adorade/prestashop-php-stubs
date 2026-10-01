<?php

namespace PrestaShopBundle\Entity\Repository;

class EmployeeRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * This query is used by the authorization process when the full employee is needed,
     * we optimized it to avoid lazy loading on too many relations. We don't join the
     * profile.authorizationRoles relation ON PURPOSE, it turns out hydrating this many
     * elements in a single query dropped the performance hugely. So it's better to let
     * Doctrine fetch this part lazily itself (it's a few ms versus 500ms with the full
     * join and heady hydration).
     *
     * @param string $userIdentifier
     * @param bool $refresh Force return a fresh entity
     *
     * @return \PrestaShopBundle\Entity\Employee\Employee|null
     *
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function loadEmployeeByIdentifier(string $userIdentifier, bool $refresh = false): ?\PrestaShopBundle\Entity\Employee\Employee
    {
    }
    public function getIdnConverter(): \PrestaShop\PrestaShop\Core\Util\InternationalizedDomainNameConverter
    {
    }
    public function setIdnConverter(\PrestaShop\PrestaShop\Core\Util\InternationalizedDomainNameConverter $idnConverter): \PrestaShopBundle\Entity\Repository\EmployeeRepository
    {
    }
}
