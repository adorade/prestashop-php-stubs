<?php

\define('_PS_ADMIN_DIR_', __DIR__);
/**
 * Generate a new settings file, only transmitted parameters are updated
 *
 * @param string|null $base_urls Base URI
 * @param string|null $theme Theme name (eg. default)
 * @param array|null $array_db Parameters in order to connect to database
 */
function rewriteSettingsFile($base_urls = \null, $theme = \null, $array_db = \null)
{
}
/**
 * Display SQL date in friendly format
 *
 * @param string $sql_date Date in SQL format (YYYY-MM-DD HH:mm:ss)
 * @param bool $with_time Display both date and time
 * @todo Several formats (french : DD-MM-YYYY)
 */
function displayDate($sql_date, $with_time = \false)
{
}
/**
 * Return path to a product category
 *
 * @param string $url_base Start URL
 * @param int $id_category Start category
 * @param string $path Current path
 * @param string $highlight String to highlight (in XHTML/CSS)
 * @param string $category_type Category type (products/cms)
 * @param bool $home
 */
function getPath($url_base, $id_category, $path = '', $highlight = '', $category_type = 'catalog', $home = \false)
{
}
function getDirContent($path)
{
}
function createDir($path, $rights)
{
}
function checkPSVersion()
{
}
/**
 * Returns a new Tab object
 *
 * @param string $tab class name
 * @return mixed(AdminTab, bool) tab object or false if failed
 */
function checkingTab($tab)
{
}
/**
 * @TODO deprecate for Tab::checkTabRights()
 */
function checkTabRights($id_tab)
{
}
/**
 * Converts a simpleXML element into an array. Preserves attributes and everything.
 * You can choose to get your elements either flattened, or stored in a custom index that
 * you define.
 * For example, for a given element
 * <field name="someName" type="someType"/>
 * if you choose to flatten attributes, you would get:
 * $array['field']['name'] = 'someName';
 * $array['field']['type'] = 'someType';
 * If you choose not to flatten, you get:
 * $array['field']['@attributes']['name'] = 'someName';
 * _____________________________________
 * Repeating fields are stored in indexed arrays. so for a markup such as:
 * <parent>
 * <child>a</child>
 * <child>b</child>
 * <child>c</child>
 * </parent>
 * you array would be:
 * $array['parent']['child'][0] = 'a';
 * $array['parent']['child'][1] = 'b';
 * ...And so on.
 * _____________________________________
 * @param simpleXMLElement $xml the XML to convert
 * @param bool $flatten_values    Choose wether to flatten values
 *                                    or to set them under a particular index.
 *                                    defaults to true;
 * @param bool $flatten_attributes Choose wether to flatten attributes
 *                                    or to set them under a particular index.
 *                                    Defaults to true;
 * @param bool $flatten_children    Choose wether to flatten children
 *                                    or to set them under a particular index.
 *                                    Defaults to true;
 * @param string $value_key            index for values, in case $flatten_values was set to false. Defaults to "@value"
 * @param string $attributes_key        index for attributes, in case $flatten_attributes was set to false. Defaults to "@attributes"
 * @param string $children_key        index for children, in case $flatten_children was set to false. Defaults to "@children"
 * @return array the resulting array.
 */
function simpleXMLToArray($xml, $flatten_values = \true, $flatten_attributes = \true, $flatten_children = \true, $value_key = '@value', $attributes_key = '@attributes', $children_key = '@children')
{
}
/**
 * for retrocompatibility with old AdminTab, old index.php
 *
 * @return void
 */
function runAdminTab($tab, $ajax_mode = \false)
{
}
