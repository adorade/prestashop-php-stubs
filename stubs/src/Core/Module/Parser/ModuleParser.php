<?php

namespace PrestaShop\PrestaShop\Core\Module\Parser;

/**
 * This parser scan the PHP code of a module main class and extracts information from
 * static PHP analysis, so it is always up-to-date with the raw PHP content.
 *
 * It was done previously by using include($moduleFile) and accessing data via $module->version,
 * the problem is that ones the class has been included it remains in the same state during the
 * whole process, providing it from being updated even if the file has been changed, which can lead
 * to unexpected values during an upgrade process. This method ensure we always get the most
 * up-to-date value from the PHP files.
 */
class ModuleParser
{
    /**
     * @param string[] $extractedModuleProperties List of properties to extract (if left empty all properties initialized in constructor are extracted)
     */
    public function __construct(private readonly array $extractedModuleProperties = self::DEFAULT_EXTRACTED_PROPERTIES)
    {
    }
    /**
     * @throws ModuleParserException
     */
    public function parseModule(string $moduleClassPath): array
    {
    }
    /**
     * Parse the whole module and dump it, very convenient for debugging.
     *
     * @throws ModuleParserException
     */
    public function dumpModuleNodes(string $moduleClassPath): string
    {
    }
    protected function getModulePropertiesAssignments(\PhpParser\Node\Stmt\ClassMethod $constructorMethod, array $classAliases, array $classConstants): array
    {
    }
    protected function getExpressionValue(\PhpParser\Node\Expr $expr, array $classAliases, array $classConstants): mixed
    {
    }
    protected function getMethodCallValue(\PhpParser\Node\Expr\MethodCall $methodCall, array $classAliases, array $classConstants): mixed
    {
    }
    protected function getClassConstValue(\PhpParser\Node\Expr\ClassConstFetch $constFetch, array $classAliases, array $classConstants): mixed
    {
    }
    protected function getConstValue(\PhpParser\Node\Expr\ConstFetch $constFetch): mixed
    {
    }
    protected function getArrayValue(\PhpParser\Node\Expr\Array_ $array, array $classAliases, array $classConstants): ?array
    {
    }
    /**
     * @param \PhpParser\Node\Stmt[] $statements
     *
     * @return array<string, \PhpParser\Node\Stmt\ClassMethod>
     */
    protected function getModuleMethods(array $statements): array
    {
    }
    /**
     * @param string $moduleClassPath
     *
     * @return \PhpParser\Node\Stmt[]
     *
     * @throws ModuleParserException
     */
    protected function parseModuleStatements(string $moduleClassPath): array
    {
    }
    /**
     * @param \PhpParser\Node\Stmt\ClassMethod[] $classMethods
     *
     * @return string[]
     */
    protected function extractHooks(array $classMethods): array
    {
    }
    /**
     * @param \PhpParser\Node\Stmt[] $statements
     *
     * @return array<string, string>
     */
    protected function getClassAliases(array $statements): array
    {
    }
    /**
     * @param \PhpParser\Node\Stmt[] $statements
     * @param array<string, string> $classAliases
     *
     * @return array<string, mixed>
     */
    protected function getModuleConstants(array $statements, array $classAliases): array
    {
    }
    /**
     * We only extract properties defined for this parser in $this->extractedModuleProperties,
     * unless it is empty then all properties are extracted
     *
     * @param string $propertyName
     *
     * @return bool
     */
    protected function shouldPropertyBeExtracted(string $propertyName): bool
    {
    }
}
