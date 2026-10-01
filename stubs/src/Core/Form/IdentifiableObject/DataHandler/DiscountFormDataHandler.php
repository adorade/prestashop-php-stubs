<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

class DiscountFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    public function __construct(
        protected readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.default.language.context')]
        protected readonly \PrestaShop\PrestaShop\Core\Context\LanguageContext $defaultLanguageContext,
        protected readonly \Symfony\Contracts\Translation\TranslatorInterface $translator
    )
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\DiscountConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Exception\DomainConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyException
     */
    public function create(array $data)
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Exception\DomainConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\DiscountConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyException
     */
    public function update($id, array $data): void
    {
    }
}
