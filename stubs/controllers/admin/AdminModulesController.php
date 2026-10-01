<?php

class AdminModulesControllerCore extends \AdminController
{
    /*
     ** @var array map with $_GET keywords and their callback
     */
    protected $map = ['install' => 'install', 'uninstall' => 'uninstall', 'configure' => 'getContent', 'update' => 'update', 'delete' => 'delete', 'updateAll' => 'updateAll'];
    protected $list_modules_categories = [];
    /** @var array */
    protected $list_partners_modules = [];
    /** @var array */
    protected $list_natives_modules = [];
    protected $nb_modules_total = 0;
    protected $nb_modules_installed = 0;
    protected $nb_modules_activated = 0;
    protected $serial_modules = '';
    protected $modules_authors = [];
    protected $id_employee;
    protected $iso_default_country;
    protected $filter_configuration = [];
    protected $xml_modules_list = \_PS_API_MODULES_LIST_16_;
    /**
     * Admin Modules Controller Constructor
     * Init list modules categories
     * Load id employee
     * Load filter configuration
     * Load cache file.
     */
    public function __construct()
    {
    }
    public function checkCategoriesNames($a, $b)
    {
    }
    public function setMedia($isNewTheme = \false)
    {
    }
    public function displayAjaxRefreshModuleList()
    {
    }
    public function ajaxProcessReloadModulesList()
    {
    }
    public function ajaxProcessGetTabModulesList()
    {
    }
    public function ajaxProcessSetFilter()
    {
    }
    public function ajaxProcessSaveFavoritePreferences()
    {
    }
    public function ajaxProcessSaveTabModulePreferences()
    {
    }
    /*
     ** Get current URL
     **
     ** @param array $remove List of keys to remove from URL
     ** @return string
     */
    protected function getCurrentUrl($remove = [])
    {
    }
    protected function extractArchive($file, $redirect = \true)
    {
    }
    protected function recursiveDeleteOnDisk($dir)
    {
    }
    /*
     ** Filter Configuration Methods
     ** Set and reset filter configuration
     */
    protected function setFilterModules($module_type, $country_module_value, $module_install, $module_status)
    {
    }
    protected function resetFilterModules()
    {
    }
    /*
     ** Post Process Filter
     **
     */
    public function postProcessFilterModules()
    {
    }
    public function postProcessResetFilterModules()
    {
    }
    public function postProcessFilterCategory()
    {
    }
    public function postProcessUnfilterCategory()
    {
    }
    /*
     ** Post Process Module CallBack
     **
     */
    public function postProcessReset()
    {
    }
    public function postProcessDownload()
    {
    }
    public function postProcessEnable()
    {
    }
    public function postProcessEnable_Device()
    {
    }
    public function postProcessDisable_Device()
    {
    }
    public function postProcessDelete()
    {
    }
    public function postProcessCallback()
    {
    }
    /**
     * @param array|null $tab_modules_list
     * @param false $install_source_tracking
     *
     * @return array<string, array<Module>>
     */
    protected function getModulesByInstallation($tab_modules_list = \null, $install_source_tracking = \false)
    {
    }
    public function postProcess()
    {
    }
    /**
     * Generate html errors for a module process.
     *
     * @param array $module_errors
     *
     * @return string
     */
    protected function generateHtmlMessage($module_errors)
    {
    }
    public function initModulesList(&$modules)
    {
    }
    /**
     * @param Module $module
     */
    public function makeModulesStats($module)
    {
    }
    public function isModuleFiltered($module)
    {
    }
    public function renderKpis()
    {
    }
    public function initModal()
    {
    }
    public function initContent()
    {
    }
    public function assignReadMoreSmartyVar()
    {
    }
    public function ajaxProcessGetModuleQuickView()
    {
    }
    public function ajaxProcessGetModuleReadMoreView()
    {
    }
}
