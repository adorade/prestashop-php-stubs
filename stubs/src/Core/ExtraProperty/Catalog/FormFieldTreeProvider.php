<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Catalog;

/**
 * Builds the field tree of a single back-office form by creating its form builder (without any
 * data) and walking the child builders recursively. Lazily called per form (one form at a time —
 * building every form eagerly would be far too expensive), see
 * ExtraPropertyDefinitionController::formFieldsAction().
 *
 * Known limitation: fields added dynamically through form events (e.g. PRE_SET_DATA listeners)
 * do not exist on the builder yet, so they cannot appear in the tree. This is acceptable for the
 * autocomplete use case — the tree is a navigation aid, not an exhaustive contract.
 *
 * Recursion stops at {@see self::MAX_DEPTH} levels to keep the payload bounded (deeper nodes are
 * pruned); a child that cannot be introspected is logged and skipped without breaking its siblings.
 * Trees are cached per form in the prestashop.extra_property.catalog.filesystem_cache pool.
 *
 * @phpstan-type FieldNode array{name: string, path: string, label: string, compound: bool, children: list<mixed>}
 */
class FormFieldTreeProvider
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Catalog\FormCatalog $formCatalog, private readonly \Symfony\Component\Form\FormFactoryInterface $formFactory, private readonly \Psr\Log\LoggerInterface $logger, private readonly \Psr\Cache\CacheItemPoolInterface $cache, private readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, private readonly \Doctrine\DBAL\Connection $connection, private readonly string $dbPrefix)
    {
    }
    /**
     * @param string $formId a form id known to the form catalog (form type block prefix)
     *
     * @return list<FieldNode>|null the root fields of the form, or null when the form id is
     *                              unknown or the form cannot be built
     */
    public function getTree(string $formId): ?array
    {
    }
}
