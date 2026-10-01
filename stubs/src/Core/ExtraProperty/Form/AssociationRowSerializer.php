<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Form;

/**
 * Turns the definition form's placement rows back into the "one placement entry" strings the
 * CQRS commands accept — the mirror image of AssociationRowPresenter, which splits the stored
 * entries into rows. Both directions only carry a row's EXPLICIT parts, so a presenter->serializer
 * round trip re-emits the stored entry byte for byte.
 *
 * Rows whose identifying field is empty are skipped: an added-then-abandoned builder row must not
 * produce an entry. No grammar check happens here — the row form types validate each serialized
 * entry through AssociationEntryParser before the data handler runs.
 */
class AssociationRowSerializer
{
    /**
     * @param list<array{form_id?: string|null, path?: string|null, mode?: string|null}> $rows
     *
     * @return list<string>
     */
    public static function formEntries(array $rows): array
    {
    }
    /**
     * @param list<array{grid_id?: string|null, column_id?: string|null, mode?: string|null}> $rows
     *
     * @return list<string>
     */
    public static function gridEntries(array $rows): array
    {
    }
    /**
     * @param list<array{uri?: string|null, methods?: string|null}> $rows
     *
     * @return list<string>
     */
    public static function apiEntries(array $rows): array
    {
    }
}
