<?php

namespace PrestaShop\PrestaShop\Core\CommandBus\Parser;

/**
 * Transfers commands and queries definition data
 */
class CommandDefinition
{
    /**
     * @param string $className
     * @param string $commandType
     * @param string $description
     */
    public function __construct($className, $commandType, $description)
    {
    }
    /**
     * @return string
     */
    public function getClassName()
    {
    }
    /**
     * @return string
     */
    public function getCommandType()
    {
    }
    /**
     * @return string
     */
    public function getDescription()
    {
    }
}
