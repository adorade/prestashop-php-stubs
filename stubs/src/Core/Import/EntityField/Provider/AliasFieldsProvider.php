<?php

namespace PrestaShop\PrestaShop\Core\Import\EntityField\Provider;

/**
 * Class AliasFieldsProvider defines an alias fields provider.
 */
final class AliasFieldsProvider implements \PrestaShop\PrestaShop\Core\Import\EntityField\Provider\EntityFieldsProviderInterface
{
    /**
     * @param TranslatorInterface $translator
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCollection()
    {
    }
}
