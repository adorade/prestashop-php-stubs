<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Catalog;

/**
 * Checks the association entries of an extra property definition against the catalogs and
 * reports the targets that do not (yet) exist as translated, NON-BLOCKING warnings.
 *
 * Pointing to a form/grid/API operation the catalogs do not know is a supported manual
 * override (the catalogs are best-effort detections), so an unknown target must never fail
 * the save — the warnings simply tell the user what will happen until the target exists.
 *
 * Entry syntax is validated upstream (the row form types + the definition VO), so
 * unparseable entries are silently skipped here.
 *
 * Defined in app/config/admin/services.yml ONLY: ApiEndpointCatalog needs the OpenApi services
 * that exist solely in the admin kernel (see its docblock).
 */
class AssociationExistenceChecker
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Catalog\FormCatalog $formCatalog, private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Catalog\GridCatalog $gridCatalog, private readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Catalog\ApiEndpointCatalog $apiEndpointCatalog, private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * @param list<string>|null $forms associated_forms entries ("formId[:path[:before|after]]")
     * @param list<string>|null $grids associated_grids entries ("gridId[:columnId[:before|after]]")
     * @param list<string>|null $apis associated_apis entries ("uriPath[:METHOD[,METHOD...]]")
     *
     * @return list<string> translated warnings (empty when every target exists)
     */
    public function check(?array $forms, ?array $grids, ?array $apis): array
    {
    }
}
