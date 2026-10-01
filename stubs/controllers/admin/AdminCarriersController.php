<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * @property Carrier $object
 */
class AdminCarriersControllerCore extends \AdminController
{
    /** @var string */
    protected $position_identifier = 'id_carrier';
    public function __construct()
    {
    }
    /**
     * Extends the renderOptions method to add a notice about migration to Symfony.
     */
    public function renderOptions()
    {
    }
    public function initToolbar()
    {
    }
    public function initPageHeaderToolbar()
    {
    }
    public function renderList()
    {
    }
    /**
     * @return string|void
     *
     * @throws SmartyException
     */
    public function renderForm()
    {
    }
    public function postProcess()
    {
    }
    public function processIsFree()
    {
    }
    /**
     * Overload the property $fields_value.
     *
     * @param object $obj
     */
    public function getFieldsValues($obj)
    {
    }
    /**
     * @param Carrier $object
     *
     * @return bool
     */
    protected function beforeDelete($object)
    {
    }
    protected function changeGroups(int $id_carrier, bool $delete = \true)
    {
    }
    public function changeZones($id)
    {
    }
    public function ajaxProcessUpdatePositions()
    {
    }
    public function displayEditLink($token, $id, $name = \null)
    {
    }
    public function displayDeleteLink($token, $id, $name = \null)
    {
    }
}
