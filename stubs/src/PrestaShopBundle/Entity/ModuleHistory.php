<?php

namespace PrestaShopBundle\Entity;

/**
 * ModuleHistory.
 *
 * @ORM\Table
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class ModuleHistory
{
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
    }
    /**
     * Set idEmployee.
     *
     * @param int $idEmployee
     *
     * @return ModuleHistory
     */
    public function setIdEmployee($idEmployee)
    {
    }
    /**
     * Get idEmployee.
     *
     * @return int
     */
    public function getIdEmployee()
    {
    }
    /**
     * Set idModule.
     *
     * @param int $idModule
     *
     * @return ModuleHistory
     */
    public function setIdModule($idModule)
    {
    }
    /**
     * Get idModule.
     *
     * @return int
     */
    public function getIdModule()
    {
    }
    /**
     * Set dateAdd.
     *
     * @param \DateTime $dateAdd
     *
     * @return ModuleHistory
     */
    public function setDateAdd($dateAdd)
    {
    }
    /**
     * Get dateAdd.
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
    }
    /**
     * Set dateUpd.
     *
     * @param \DateTime $dateUpd
     *
     * @return ModuleHistory
     */
    public function setDateUpd($dateUpd)
    {
    }
    /**
     * Get dateUpd.
     *
     * @return \DateTime
     */
    public function getDateUpd()
    {
    }
    /**
     * Now we tell doctrine that before we persist or update we call the updatedTimestamps() function.
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updatedTimestamps()
    {
    }
}
