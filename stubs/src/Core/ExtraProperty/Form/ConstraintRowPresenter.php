<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Form;

/**
 * Splits a constraints DSL string (the ExtraPropertyConstraintRenderer output) into the row models backing the
 * definition form's constraint builder (one row = one collection entry, keys = row field names) —
 * the mirror image of ConstraintRowSerializer, which the data handler runs on submit.
 *
 * A row keeps the constraint's argument as the VERBATIM token tail (the text between the token's
 * "(...)" or "[...]" delimiters): the builder renders typed inputs over the tail when it can, and
 * shows it as-is when it can't — either way nothing is lost. The FIRST top-level All[...] token is
 * exploded into per_language rows (the builder's "Applied to each language's value" zone) and folds
 * back into a single All[...] line on serialization; any further All[...] tokens stay opaque
 * set-level rows. Names are NOT checked against the grammar's allowlist here — a module-attached
 * constraint outside the allowlist still presents as a row (the read-only view renders it; on the
 * editable form the row form type validates names on submit). A token without the Name/Name(...)/
 * Name[...] shape cannot be represented as a row and is skipped; the renderer never emits such a
 * token, so this only drops hand-edited database values.
 *
 * Every row carries 'composite_options' even when it is empty, which is only ever filled for a
 * composite. This is deliberate: the field is declared on the row form type, so Symfony binds it on
 * every row regardless — a submitted row comes back with 'composite_options' => null even when the
 * request did not carry it. Emitting it only for composites would make this output disagree with the
 * shape of the bound data, which is exactly what the form round-trip compares.
 */
class ConstraintRowPresenter
{
    /**
     * @return list<array{name: string, options: string, composite_options: string, per_language: string}>
     */
    public static function rows(?string $raw): array
    {
    }
}
