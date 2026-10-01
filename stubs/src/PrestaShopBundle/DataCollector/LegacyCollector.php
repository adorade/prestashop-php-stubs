<?php

namespace PrestaShopBundle\DataCollector;

/**
 * Collects data from the legacy debug profiling (e.g. queries coming from Db class)
 */
final class LegacyCollector extends \Symfony\Component\HttpKernel\DataCollector\DataCollector
{
    /**
     * {@inheritdoc}
     */
    public function collect(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\HttpFoundation\Response $response, ?\Throwable $exception = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function reset()
    {
    }
    /**
     * @return bool
     */
    public function isProfilerEnabled(): bool
    {
    }
    /**
     * @return array
     */
    public function getConfiguration(): array
    {
    }
    /**
     * @return array
     */
    public function getDoubles(): array
    {
    }
    /**
     * @return array
     */
    public function getHooks(): array
    {
    }
    /**
     * @return array
     */
    public function getIncludedFiles(): array
    {
    }
    /**
     * @return array
     */
    public function getModules(): array
    {
    }
    /**
     * @return array
     */
    public function getObjectModelInstances(): array
    {
    }
    /**
     * @return array
     */
    public function getRun(): array
    {
    }
    /**
     * @return array
     */
    public function getSqlTableStress(): array
    {
    }
    /**
     * @return array
     */
    public function getStopwatch(): array
    {
    }
    /**
     * @return array
     */
    public function getSummary(): array
    {
    }
}
