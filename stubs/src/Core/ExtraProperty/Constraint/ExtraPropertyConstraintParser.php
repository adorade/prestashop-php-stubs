<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Constraint;

/**
 * Parses the extra property constraint DSL ("one constraint per line", or comma-separated) into
 * Symfony Constraint instances.
 *
 * Each top-level token takes one of four shapes:
 * - bare:            NotBlank
 * - positional:      TypedRegex('generic_name'), GreaterThan(5), Choice(['a', 'b', 'c'])
 *                    — the single value feeds the constraint's default option
 * - named options:   Length(min: 2, max: 64), Choice(choices: ['a', 'b'], multiple: true)
 * - composite:       All[ Url, NotBlank ] — nested constraints between brackets, any depth;
 *                    Collection keys its children: Collection[ name: NotBlank, code: Length(max: 5) ]
 *                    and a composite may carry its own options ahead of them:
 *                    Collection(allowExtraFields: true)[ name: NotBlank ]
 *
 * Value typing is explicit: a 'single'- or "double"-quoted value is always a string (backslash
 * escapes \\ \' \" are honored), while an unquoted value is a number when numeric (int/float),
 * one of the literals true/false/null, and a string otherwise. This is what tells "01" (string)
 * apart from 01 (int 1), and 5 (int) apart from "5" (string).
 *
 * Names are resolved against the ExtraPropertyConstraintGrammar allowlist and never taken from
 * the text; options Symfony invokes at validation time are refused. Parsing never throws: the
 * stored DSL is parsed on front-office requests too, so a corrupt or tampered row must not take a
 * page down. Each top-level token is decoded on its own — a failing one is reported as a
 * rejection while its valid siblings stay active, and a composite is always dropped as a whole
 * (a partially decoded composite would silently weaken the validation it describes). The caller
 * decides what a rejection means: a command refuses the whole input, the repository logs it.
 */
class ExtraPropertyConstraintParser
{
    /**
     * Parses a DSL value into constraints, reporting every token it had to drop.
     */
    public static function parse(?string $raw): \PrestaShop\PrestaShop\Core\ExtraProperty\Constraint\DecodedConstraints
    {
    }
    /**
     * Splits a raw DSL value into its top-level constraint tokens without interpreting them, each
     * with the 1-based line it starts on, and enforces the grammar bounds. Exposed so other readers
     * of the DSL (e.g. the BO builder's row presenter) stay pinned to the same grammar authority
     * instead of re-implementing the quote/bracket rules.
     *
     * @return list<array{0: string, 1: int}>
     *
     * @throws \PrestaShop\PrestaShop\Core\ExtraProperty\Exception\InvalidExtraPropertyConstraintException when the value exceeds a grammar bound
     */
    public static function tokenize(string $raw): array
    {
    }
    /**
     * Splits one token into its name, its optional "(...)" options tail and its optional "[...]"
     * children tail, or returns null when the token does not match the grammar.
     *
     * Exposed so the BO builder's row presenter splits tokens with the exact same quote and
     * delimiter rules as the parser, instead of re-implementing them with a weaker regex.
     *
     * @return array{name: string, options: string|null, children: string|null}|null
     */
    public static function splitToken(string $token): ?array
    {
    }
}
