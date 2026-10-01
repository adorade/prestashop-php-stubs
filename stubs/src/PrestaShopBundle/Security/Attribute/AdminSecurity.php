<?php

namespace PrestaShopBundle\Security\Attribute;

/**
 * Attribute based on the IsGranted attribute, adding information for redirection
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
class AdminSecurity
{
    /**
     * Sets the first argument that will be passed to isGranted().
     */
    protected string|\Symfony\Component\ExpressionLanguage\Expression $attribute;
    /**
     * If set, will throw HttpKernel's HttpException with the given $statusCode.
     * If null, Security\Core's AccessDeniedException will be used.
     */
    protected ?int $statusCode = null;
    /**
     * If set, will add the exception code to thrown exception.
     */
    protected ?int $exceptionCode = null;
    /**
     * The route for the redirection.
     *
     * @todo: Once the onboarding page is migrated, set default to his route name.
     */
    protected ?string $redirectRoute = null;
    /**
     * Define if a JSON or HTTP Response is expected
     */
    protected bool $hasJsonResponse = false;
    // The translation domain for the message.
    protected string $domain = 'Admin.Notifications.Error';
    /**
     * @deprecated once the back office is migrated, rely only on route.
     * The url for the redirection
     */
    protected string $url = 'admin_domain';
    /**
     * The message of the exception - has a nice default if not set.
     */
    protected string $message = 'Access Denied.';
    // The route params which are used together to generate the redirect route.
    protected array $redirectQueryParamsToKeep = [];
    public function __construct(array|string $data = [], ?string $message = null, ?string $domain = null, ?string $url = null, ?array $redirectQueryParamsToKeep = null, ?int $statusCode = null, ?int $exceptionCode = null, ?string $redirectRoute = null, ?bool $jsonResponse = false)
    {
    }
    public function getAttribute(): \Symfony\Component\ExpressionLanguage\Expression|string
    {
    }
    public function setAttribute(\Symfony\Component\ExpressionLanguage\Expression|string $attribute): void
    {
    }
    public function setValue(\Symfony\Component\ExpressionLanguage\Expression|string $expression): void
    {
    }
    public function getMessage(): string
    {
    }
    public function setMessage(string $message): void
    {
    }
    public function getStatusCode(): ?int
    {
    }
    public function setStatusCode(?int $statusCode): void
    {
    }
    public function getExceptionCode(): ?int
    {
    }
    public function setExceptionCode(?int $exceptionCode): void
    {
    }
    public function getDomain(): string
    {
    }
    public function setDomain(string $domain): void
    {
    }
    public function getRedirectRoute(): ?string
    {
    }
    public function setRedirectRoute(?string $redirectRoute): void
    {
    }
    public function hasJsonResponse(): bool
    {
    }
    public function setJsonResponse(bool $hasJsonResponse): void
    {
    }
    public function getUrl(): string
    {
    }
    public function setUrl(string $url): void
    {
    }
    public function getRedirectQueryParamsToKeep(): array
    {
    }
    public function setRedirectQueryParamsToKeep(array $redirectQueryParamsToKeep): void
    {
    }
}
