<?php

namespace PrestaShop\PrestaShop\Core\Import\EntityField\Provider;

/**
 * Class CategoryFieldsProvider defines a category fields provider.
 */
final class CategoryFieldsProvider implements \PrestaShop\PrestaShop\Core\Import\EntityField\Provider\EntityFieldsProviderInterface
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
