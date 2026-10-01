<?php

namespace PrestaShop\PrestaShop\Core\Hook\Extractor;

class HookParserVisitor extends \PhpParser\NodeVisitorAbstract
{
    public function __construct(string $filePath, string $code)
    {
    }
    public function enterNode(\PhpParser\Node $node): int|\PhpParser\Node|null
    {
    }
    public function getArgValue(\PhpParser\Node $expr): string
    {
    }
    /**
     * @return array
     */
    public function getHooks(): array
    {
    }
}
