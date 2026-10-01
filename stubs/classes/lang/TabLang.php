<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
/**
 * Translates content from the tab entity
 */
class TabLangCore extends \DataLangCore
{
    protected $domain = 'Admin.Navigation.Menu';
    protected $keys = ['id_tab'];
    protected $fieldsToUpdate = ['name'];
    /**
     * @param string $field
     * @param string|array $value
     *
     * @return string
     */
    public function getFieldValue($field, $value)
    {
    }
}
