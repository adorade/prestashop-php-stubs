<?php

/**
 * For the full copyright and license information, please view the
 * docs/licenses/LICENSE.txt file that was distributed with this source code.
 */
class CategoryLangCore extends \DataLangCore
{
    // Don't replace domain in init() with $this->domain for translation parsing
    protected $domain = 'Admin.Catalog.Feature';
    protected $keys = ['id_category', 'id_shop'];
    protected $fieldsToUpdate = ['name', 'link_rewrite'];
    public function getFieldValue($field, $value)
    {
    }
}
