<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Form;

/**
 * Machine-readable description of the constraints the BO "Validation" textarea accepts
 * (the ExtraPropertyConstraintGrammar allowlist), meant to be serialized into the definition
 * page so a builder UI can offer each constraint with its configurable options.
 *
 * Shape (JSON-ready):
 *   name => {
 *     defaultOption: ?string,     // option filled by the positional shape, e.g. Choice([...])
 *     composite: bool,            // accepts nested constraints via the bracket shape, e.g. All[...]
 *     required: list<string>,     // options that must be provided
 *     options: { optionName: { type: 'string'|'int'|'number'|'bool'|'list'|'mixed' } }
 *   }
 *
 * Options are reflected from the constraint's public properties; a curated override fixes the
 * ordering and typing of the constraints the builder UI features prominently (reflection cannot
 * tell a UI-relevant option from an edge-case one, nor order them meaningfully). Message-template
 * options are left out — they are parseable but noise for a builder UI.
 */
class ExtraPropertyConstraintCatalog
{
    /**
     * @return array<string, array{defaultOption: ?string, composite: bool, required: list<string>, options: array<string, array{type: string}>}>
     */
    public function getCatalog(): array
    {
    }
}
