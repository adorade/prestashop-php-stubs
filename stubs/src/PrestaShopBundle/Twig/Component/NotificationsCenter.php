<?php

namespace PrestaShopBundle\Twig\Component;

#[\Symfony\UX\TwigComponent\Attribute\AsTwigComponent(template: '@PrestaShop/Admin/Component/Layout/notifications_center.html.twig')]
class NotificationsCenter
{
    protected ?bool $showNewOrders = null;
    protected ?bool $showNewCustomers = null;
    protected ?bool $showNewMessages = null;
    protected ?string $noOrderTip = null;
    protected ?string $noCustomerTip = null;
    protected ?string $noCustomerMessageTip = null;
    protected readonly \Link $link;
    protected array|false|null $accesses = null;
    public function __construct(protected readonly \Symfony\Contracts\Translation\TranslatorInterface $translator, protected readonly \PrestaShop\PrestaShop\Adapter\LegacyContext $legacyContext, protected readonly \Symfony\Component\Routing\RouterInterface $router)
    {
    }
    /**
     * @return bool
     */
    public function isShowNewOrders(): bool
    {
    }
    /**
     * @return bool
     */
    public function isShowNewCustomers(): bool
    {
    }
    /**
     * @return bool
     */
    public function isShowNewMessages(): bool
    {
    }
    /**
     * @return string
     */
    public function getNoOrderTip(): string
    {
    }
    /**
     * @return string
     */
    public function getNoCustomerTip(): string
    {
    }
    /**
     * @return string
     */
    public function getNoCustomerMessageTip(): string
    {
    }
    protected function getNotificationTip(string $type): string
    {
    }
    protected function getAccesses(): array|false
    {
    }
}
