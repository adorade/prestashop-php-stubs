<?php

namespace PrestaShopBundle\Twig\Component;

#[\Symfony\UX\TwigComponent\Attribute\AsTwigComponent(template: '@PrestaShop/Admin/Component/Layout/search_form.html.twig')]
class SearchForm
{
    protected const BO_QUERY_PARAM = 'bo_query';
    protected const BO_SEARCH_TYPE_PARAM = 'bo_search_type';
    public string $boQuery;
    public bool $showClearBtn;
    public int $searchType;
    public function __construct(protected readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    public function mount(): void
    {
    }
}
