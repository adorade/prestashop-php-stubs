<?php

namespace PrestaShop\PrestaShop\Core\Module\SourceHandler;

class RemoteZipSourceHandler implements \PrestaShop\PrestaShop\Core\Module\SourceHandler\SourceHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\Module\SourceHandler\ZipSourceHandler $zipSourceHandler, \Symfony\Contracts\HttpClient\HttpClientInterface $httpClient, string $downloadDir)
    {
    }
    public function canHandle($source): bool
    {
    }
    public function getModuleName($source): ?string
    {
    }
    public function handle(string $source): void
    {
    }
}
