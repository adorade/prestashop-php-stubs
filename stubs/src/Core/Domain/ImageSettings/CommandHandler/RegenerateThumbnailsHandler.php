<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class RegenerateThumbnailsHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler\RegenerateThumbnailsHandlerInterface
{
    public function __construct(private readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, private readonly \PrestaShopBundle\Entity\Repository\ImageTypeRepository $imageTypeRepository, private readonly \PrestaShop\PrestaShop\Core\Language\LanguageRepositoryInterface $langRepository, private readonly \PrestaShop\PrestaShop\Adapter\ImageThumbnailsRegenerator $imageThumbnailsRegenerator)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Exception\ImageTypeException
     * @throws \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Exception\RegenerateThumbnailsException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\RegenerateThumbnailsCommand $command): void
    {
    }
}
