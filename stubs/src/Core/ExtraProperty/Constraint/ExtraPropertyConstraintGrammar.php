<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Constraint;

/**
 * Vocabulary of the extra property constraint DSL: which Symfony constraints may appear in a
 * definition and under which alias, which options are refused, and the bounds a definition must
 * respect. It knows nothing about the text itself (see ExtraPropertyConstraintParser) nor about
 * rendering (see ExtraPropertyConstraintRenderer): both directions read their rules here, so they
 * cannot drift apart.
 *
 * The allowlist is also the security boundary of the format. The DSL is persisted in the registry
 * table and parsed back on every request, so a class name never comes from the text: an alias is
 * resolved against this table or refused. Options Symfony invokes or resolves at validation time
 * (callables, property paths) are refused in both directions for the same reason.
 */
class ExtraPropertyConstraintGrammar
{
    /**
     * Bounds applied to any DSL string being parsed. The value stored in the registry is parsed on
     * read, so a tampered row must not be able to exhaust the stack or the request budget.
     */
    public const MAX_NESTING_DEPTH = 16;
    public const MAX_RAW_LENGTH = 65535;
    public const MAX_TOKENS = 256;
    /**
     * The allowlist itself (alias => constraint FQCN), e.g. to build a machine-readable catalog.
     *
     * @return array<string, class-string<\Symfony\Component\Validator\Constraint>>
     */
    public static function getAllowedConstraints(): array
    {
    }
    /**
     * @return list<string>
     */
    public static function getAllowedNames(): array
    {
    }
    /**
     * Resolves a DSL alias to its constraint class. The internal Collection wrappers are only
     * resolvable when the caller says so (i.e. directly under a Collection).
     *
     * @return class-string<\Symfony\Component\Validator\Constraint>
     *
     * @throws \PrestaShop\PrestaShop\Core\ExtraProperty\Exception\UnknownExtraPropertyConstraintException
     */
    public static function resolveName(string $alias, bool $allowInternal = false): string
    {
    }
    /**
     * The DSL alias of a constraint class (internal Collection wrappers included), or null when the
     * class is outside the grammar. Rendering resolves the alias through this map instead of the
     * class short name, so a class outside the grammar is structurally unrenderable rather than
     * emitted as a name the parser would later reject.
     *
     * @param class-string $fqcn
     */
    public static function aliasOf(string $fqcn): ?string
    {
    }
    /**
     * The public aliases whose token uses the composite bracket shape ("Name[ children ]") instead
     * of the parenthesis shape.
     *
     * @return list<string>
     */
    public static function compositeNames(): array
    {
    }
    /**
     * @param class-string $fqcn
     */
    public static function isComposite(string $fqcn): bool
    {
    }
    /**
     * Whether an option is one Symfony invokes as a callable at validation time.
     */
    public static function isCallableOption(string $option): bool
    {
    }
    /**
     * Whether an option is refused wherever a constraint is built or rendered: callable options
     * Symfony invokes at validation time, and property-path options that traverse the validated
     * object (an extra property constraint validates a single value).
     */
    public static function isForbiddenOption(string $option): bool
    {
    }
    /**
     * Whether an option may appear in the DSL at all. groups and payload exist on every constraint
     * but carry no meaning for an extra property: the parser refuses them in a token, the renderer
     * refuses non-default values on an object instead of dropping them silently, and the BO builder
     * never offers them.
     */
    public static function isRenderableOption(string $option): bool
    {
    }
    /**
     * The option fed by the positional shape ("GreaterThan(5)"), read without invoking the
     * constructor (the method returns a constant and touches no instance state).
     *
     * @param class-string<\Symfony\Component\Validator\Constraint> $fqcn
     */
    public static function defaultOptionOf(string $fqcn): ?string
    {
    }
    /**
     * The option through which a composite carries its nested constraints — the one that travels in
     * the "[...]" tail and must never be rendered or accepted as a regular option.
     *
     * @param class-string<\Symfony\Component\Validator\Constraint> $fqcn
     */
    public static function childrenOptionOf(string $fqcn): string
    {
    }
}
