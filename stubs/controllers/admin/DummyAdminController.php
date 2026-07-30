<?php

/**
 * This class is used only because some parts of the Back Office require a Controller
 * to function (like the NullDispatcher).
 */
class DummyAdminControllerCore extends \AdminController
{
    public function __construct()
    {
    }
    public function checkAccess()
    {
    }
    public function viewAccess($disable = \false)
    {
    }
    public function postProcess()
    {
    }
    public function display()
    {
    }
    public function setMedia($isNewTheme = \false)
    {
    }
    public function initHeader()
    {
    }
    public function initContent()
    {
    }
    public function initCursedPage()
    {
    }
    public function initFooter()
    {
    }
    protected function redirect()
    {
    }
    /**
     * @return ContainerInterface|null
     */
    protected function buildContainer()
    {
    }
}
