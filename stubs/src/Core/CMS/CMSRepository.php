<?php

namespace PrestaShop\PrestaShop\Core\CMS;

class CMSRepository extends \PrestaShop\PrestaShop\Core\Foundation\Database\EntityRepository
{
    /**
     * Return all CMSRepositories depending on $id_lang/$id_shop tuple.
     *
     * @param int $id_lang
     * @param int $id_shop
     *
     * @return array|null
     */
    public function i10nFindAll($id_lang, $id_shop)
    {
    }
    /**
     * Return all CMSRepositories depending on $id_lang/$id_shop tuple.
     *
     * @param int $id_cms
     * @param int $id_lang
     * @param int $id_shop
     *
     * @return CMS|null
     *
     * @throws Exception
     */
    public function i10nFindOneById($id_cms, $id_lang, $id_shop)
    {
    }
}
