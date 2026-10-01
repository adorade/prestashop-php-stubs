<?php

namespace PrestaShopBundle\Console;

/**
 * Dedicated application for Symfony console that addition adds default parameter app-id
 * to all the commands to allow switching from one kernel to another.
 */
class PrestaShopApplication extends \Symfony\Bundle\FrameworkBundle\Console\Application
{
    protected function getDefaultInputDefinition(): \Symfony\Component\Console\Input\InputDefinition
    {
    }
    public function getLongVersion(): string
    {
    }
}
