<?php

namespace PrestaShop\PrestaShop\Core\Translation\Builder\Map;

/**
 * This class is a representation of a Domain catalogue.
 * It contains any message (wording) linked to it.
 * It gives methods to get the domain as an array or just the tree,
 * both with metadata including the number of messages and untranslated wordings
 */
class Domain
{
    public function __construct(string $domainName)
    {
    }
    public function getDomainName(): string
    {
    }
    /**
     * @param Message $message
     */
    public function addMessage(\PrestaShop\PrestaShop\Core\Translation\Builder\Map\Message $message): self
    {
    }
    /**
     * @return Message[]
     */
    public function getMessages(): array
    {
    }
    public function getTranslationsCount(): int
    {
    }
    public function getMissingTranslationsCount(): int
    {
    }
    /**
     * Builds the domain metadata tree.
     *
     * Returns a structure like this:
     *
     * ```
     * [
     *     '__metadata' => [
     *         'count' => 11,
     *         'missing_translations' => 5
     *     ],
     *     'Admin' => [
     *         '__metadata' => [
     *             'count' => 11,
     *             'missing_translations' => 5
     *         ],
     *         'Foo' => [
     *             '__metadata' => [
     *                 'count' => 4,
     *                 'missing_translations' => 3
     *             ],
     *             'Bar' => [
     *                 '__metadata' => [
     *                     'count' => 2,
     *                     'missing_translations' => 1
     *                 ],
     *             ],
     *             'Baz' => [
     *                 '__metadata' => [
     *                     'count' => 2,
     *                     'missing_translations' => 2
     *                 ],
     *             ],
     *         ],
     *         'Plop' => [
     *             '__metadata' => [
     *                 'count' => 7,
     *                 'missing_translations' => 2
     *             ],
     *             'Foo' => [
     *                 '__metadata' => [
     *                     'count' => 2,
     *                     'missing_translations' => 0
     *                 ],
     *             ],
     *             'Bar' => [
     *                 '__metadata' => [
     *                     'count' => 3,
     *                     'missing_translations' => 1
     *                 ],
     *             ],
     *         ],
     *     ],
     * ];
     * ```
     *
     * @param array $tree
     *
     * @return array
     */
    public function mergeTree(array &$tree): array
    {
    }
    /**
     * Converts a domainName into Subdomains.
     * First, we split the camelcased name and add underscore between each part. For example DomainNameNumberOne will be Domain_Name_Number_One
     * Then, we explode the name in 3 parts based on _ separator. So Domain_Name_Number_One will be ['Domain', 'Name', 'Number_One']
     *
     * @param string $domain
     *
     * @return string[]
     */
    public static function splitDomain(string $domain): array
    {
    }
    /**
     * @param bool $withMetadata
     *
     * @return array
     */
    public function toArray(bool $withMetadata = true): array
    {
    }
}
