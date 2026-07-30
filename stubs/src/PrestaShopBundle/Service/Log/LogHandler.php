<?php

namespace PrestaShopBundle\Service\Log;

class LogHandler extends \Monolog\Handler\AbstractProcessingHandler
{
    protected $container;
    public function __construct(\Symfony\Component\DependencyInjection\Container $container, $level = \Monolog\Logger::DEBUG, $bubble = true)
    {
    }
    protected function write(array $record)
    {
    }
}
