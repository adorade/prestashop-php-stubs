<?php

namespace PrestaShop\PrestaShop\Adapter\Module;

/**
 * This class will provide data from DB / ORM about Module.
 */
class ModuleDataProvider
{
    public function __construct(\Psr\Log\LoggerInterface $logger, \Symfony\Contracts\Translation\TranslatorInterface $translator, \Doctrine\ORM\EntityManager $entityManager = null)
    {
    }
    /**
     * @param int $employeeID
     */
    public function setEmployeeId($employeeID)
    {
    }
    /**
     * Return all module information from database.
     *
     * @param string $name The technical module name to search
     *
     * @return array
     */
    public function findByName($name)
    {
    }
    /**
     * Return installed modules along with their id, name and version
     * If a specific shop is selected, active and active_on_mobile keys are added
     *
     * @return array
     */
    public function getInstalled(): array
    {
    }
    /**
     * Return translated module *Display Name*.
     *
     * @param string $module The technical module name
     *
     * @return string The translated Module displayName
     */
    public function getModuleName($module)
    {
    }
    /**
     * Check current employee permission on a given module.
     *
     * @param string $action
     * @param string $name
     *
     * @return bool True if allowed
     */
    public function can($action, $name)
    {
    }
    /**
     * Check if a module is enabled in the current shop context.
     *
     * @param string $name The technical module name
     *
     * @return bool True if enable
     */
    public function isEnabled($name)
    {
    }
    public function isInstalled($name)
    {
    }
    /**
     * @param string $name
     *
     * @return bool
     */
    public function isInstalledAndActive(string $name): bool
    {
    }
    /**
     * Returns the Module Id
     *
     * @param string $name The technical module name
     * @param bool $activeModulesOnly Should we return the module only if it's active ?
     *
     * @return int the Module Id, or 0 if not found
     */
    public function getModuleIdByName($name, bool $activeModulesOnly = false)
    {
    }
    /**
     * We won't load an invalid class. This function will check any potential parse error.
     *
     * @param string $name The technical module name to check
     *
     * @return bool true if valid
     */
    public function isModuleMainClassValid($name)
    {
    }
    /**
     * Check if the module is in the modules folder, with a valid class.
     *
     * @param string $name The technical module name to find
     *
     * @return bool True if found
     */
    public function isOnDisk($name)
    {
    }
}
