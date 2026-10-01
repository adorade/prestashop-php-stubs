<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Constraint;

/**
 * Outcome of parsing a constraint DSL string: what could be built, and what had to be dropped.
 *
 * The parser never throws — a corrupt registry row must not break a front-office render — so it
 * needs a way to report what it discarded without hiding it. Returning both halves in one value
 * keeps the parsing to a single pass and leaves the interpretation to the caller: a command refuses
 * the whole input on any rejection, the repository keeps the valid constraints and logs the rest.
 */
final class DecodedConstraints
{
    /**
     * @param list<\Symfony\Component\Validator\Constraint> $constraints
     * @param list<array{index: int|null, line: int|null, reason: string}> $rejections index and
     *                                                                                 line are null
     *                                                                                 for a rejection of the whole definition (a bound exceeded), the 0-based token index and 1-based line otherwise
     */
    public function __construct(private readonly array $constraints = [], private readonly array $rejections = [])
    {
    }
    /**
     * Null rather than an empty list when nothing usable remains, mirroring the "no validation"
     * default a definition carries when its constraints column is empty.
     *
     * @return list<\Symfony\Component\Validator\Constraint>|null
     */
    public function getConstraints(): ?array
    {
    }
    /**
     * @return list<array{index: int|null, line: int|null, reason: string}>
     */
    public function getRejections(): array
    {
    }
    public function hasRejections(): bool
    {
    }
    /**
     * Every rejection as a human-readable line-located message, for callers that report the whole
     * input as invalid (commands, form fields).
     *
     * @return list<string>
     */
    public function getRejectionMessages(): array
    {
    }
}
