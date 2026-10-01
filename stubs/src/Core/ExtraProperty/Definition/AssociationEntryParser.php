<?php

namespace PrestaShop\PrestaShop\Core\ExtraProperty\Definition;

/**
 * Stateless parser for extra property association entries.
 *
 * Centralizes the three placement-entry grammars used by ExtraPropertyDefinition:
 *  - forms: "formId[:path[:before|after]]" (nested path segments separated by dots)
 *  - grids: "gridId[:columnId[:before|after]]"
 *  - apis:  "uriPath[:METHOD[,METHOD...]]" (split on the FIRST colon; URI templates never contain ":")
 *
 * The parse*() methods never throw — they return the best-effort decomposition of an entry.
 * The assertValid*() methods run the exact syntax checks enforced by the
 * ExtraPropertyDefinition constructor and throw InvalidExtraPropertyDefinitionException with
 * identical messages, so the VO and the BO form validation stay in sync by construction.
 * Note: they intentionally do NOT check that the formId/gridId/uriPath exists — pointing to a
 * form or grid not (yet) detected by the catalog is a supported manual override.
 */
class AssociationEntryParser
{
    /**
     * HTTP methods accepted as modifiers of an associated_apis entry.
     */
    public const ALLOWED_HTTP_METHODS = ['GET', 'POST', 'PUT', 'PATCH', 'DELETE'];
    /**
     * Parses one associated_forms entry into its fully-resolved components.
     *
     * Format: "formId[:path[:before|after]]"
     * The ":" separates the form id from the field path, and the field path from the optional mode.
     * Nesting *within* the path still uses "." (e.g. "options.suppliers").
     *
     * Placement is resolved here, once, so consumers never re-interpret the entry. path is the form node
     * the field belongs to; it is null (and only then) when there is no path — the signal for fallback:
     * - no path  => fallback section (path/anchor are null).
     * - no mode  => the path is a container; path is the full path, anchor is null
     *               (the field is appended inside that node).
     * - mode set => the last raw segment is an anchor; path is its parent (the raw path minus its last
     *               segment, "" when the anchor is at the root) and anchor is that last segment
     *               (the field is positioned before/after the anchor inside the parent).
     *
     * @return array{formId: string, mode: 'before'|'after'|null, path: string|null, anchor: string|null}
     */
    public static function parseFormEntry(string $entry): array
    {
    }
    /**
     * Parses one associated_grids entry into its components.
     *
     * Format: "gridId[:columnId[:before|after]]"
     * The ":" separates the grid id from the column id, and the column id from the optional mode.
     * Grid columns are flat (no nesting), so the column id never contains a separator.
     *
     * Unlike parseFormEntry() — where a path without a mode means "append inside the container"
     * (mode null) — a column id without an explicit mode defaults to 'after': a grid has no
     * containers, a column is always a before/after anchor.
     *
     * @return array{gridId: string, columnId: string|null, mode: 'before'|'after'|null}
     */
    public static function parseGridEntry(string $entry): array
    {
    }
    /**
     * Parses one associated_apis entry.
     *
     * Format: "uriPath[:METHOD[,METHOD...]]"
     * The ":" separates the URI path from an optional comma-separated HTTP method list; URI
     * templates never contain ":", so splitting on the first ":" is unambiguous. With no method
     * list the entry matches every HTTP method on that URI template.
     *
     * @return array{path: string, methods: list<string>|null}
     */
    public static function parseApiEntry(string $entry): array
    {
    }
    /**
     * Normalizes a URI path for comparison: trims, forces a single leading slash, and drops a
     * trailing slash (except for the root "/").
     */
    public static function normalizeApiPath(string $path): string
    {
    }
    /**
     * Parses an associated_forms entry and enforces its syntax rules (non-empty formId).
     *
     * @return array{formId: string, mode: 'before'|'after'|null, path: string|null, anchor: string|null}
     *
     * @throws \PrestaShop\PrestaShop\Core\ExtraProperty\Exception\InvalidExtraPropertyDefinitionException when the formId part is empty
     */
    public static function assertValidFormEntry(string $entry): array
    {
    }
    /**
     * Parses an associated_grids entry and enforces its syntax rules (non-empty gridId).
     *
     * @return array{gridId: string, columnId: string|null, mode: 'before'|'after'|null}
     *
     * @throws \PrestaShop\PrestaShop\Core\ExtraProperty\Exception\InvalidExtraPropertyDefinitionException when the gridId part is empty
     */
    public static function assertValidGridEntry(string $entry): array
    {
    }
    /**
     * Parses an associated_apis entry and enforces its syntax rules (non-empty URI path,
     * whitelisted HTTP methods).
     *
     * @return array{path: string, methods: list<string>|null}
     *
     * @throws \PrestaShop\PrestaShop\Core\ExtraProperty\Exception\InvalidExtraPropertyDefinitionException when the URI path is empty or a method is not allowed
     */
    public static function assertValidApiEntry(string $entry): array
    {
    }
}
