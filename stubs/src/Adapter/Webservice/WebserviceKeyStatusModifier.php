<?php

namespace PrestaShop\PrestaShop\Adapter\Webservice;

/**
 * Class WebserviceKeyStatusModifier is responsible for modifying webservice account status.
 */
final class WebserviceKeyStatusModifier
{
    /**
     * WebserviceKeyStatusModifier constructor.
     *
     * @param TranslatorInterface $translator
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * Toggles status for webservice key entity.
     *
     * @param int $columnId - an id which identifies the required entity to be modified
     *
     * @return string[] - if empty when process of status change was successful
     *
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    public function toggleStatus($columnId)
    {
    }
    /**
     * Updates status for multiple fields.
     *
     * @param array $columnIds
     * @param bool $status
     *
     * @return bool
     *
     * @throws \PrestaShopDatabaseException
     * @throws \PrestaShopException
     */
    public function setStatus(array $columnIds, $status)
    {
    }
}
