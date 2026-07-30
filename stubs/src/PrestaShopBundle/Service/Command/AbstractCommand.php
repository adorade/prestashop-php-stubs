<?php

namespace PrestaShopBundle\Service\Command;

abstract class AbstractCommand
{
    protected $kernel;
    protected $application;
    protected $commands = [];
    /**
     * Constructor.
     *
     * Construct the symfony environment.
     *
     * @param AppKernel $kernel Symfony Kernel
     */
    public function __construct(\AppKernel $kernel = null)
    {
    }
    /**
     * Execute all defined commands.
     *
     * @throws Exception if no command defined
     */
    public function execute()
    {
    }
    /**
     * Add cache:clear to the execution.
     */
    public function addCacheClear()
    {
    }
}
