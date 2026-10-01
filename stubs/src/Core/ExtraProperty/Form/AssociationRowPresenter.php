<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Form;

/**
 * Splits the stored "one placement entry per line" values into the row models backing the
 * definition form's builder rows (one row = one collection entry, keys = row field names) — the
 * mirror image of AssociationRowSerializer, which the data handler runs on submit.
 *
 * Rows only carry the entry's EXPLICIT parts so that serializing a row back re-emits the original
 * entry: a grid entry "product:reference" keeps mode = '' here even though the runtime resolves it
 * to "after". A line that fails the grammar (the same assertValid* checks the
 * ExtraPropertyDefinition constructor runs) is skipped — every persisted entry went through that
 * grammar already, so this only drops hand-edited database values.
 */
class AssociationRowPresenter
{
    /**
     * @return list<array{form_id: string, path: string, mode: string}>
     */
    public static function formRows(?string $raw): array
    {
    }
    /**
     * @return list<array{grid_id: string, column_id: string, mode: string}>
     */
    public static function gridRows(?string $raw): array
    {
    }
    /**
     * @return list<array{uri: string, methods: string}>
     */
    public static function apiRows(?string $raw): array
    {
    }
}
