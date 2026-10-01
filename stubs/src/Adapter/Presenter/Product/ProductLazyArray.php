<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Product;

/**
 * @property string $availability_message
 */
class ProductLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\AbstractLazyArray
{
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Image\ImageRetriever
     */
    protected $imageRetriever;
    /**
     * @var \Link
     */
    protected $link;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Product\PriceFormatter
     */
    protected $priceFormatter;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever
     */
    protected $productColorsRetriever;
    /**
     * @var \Symfony\Contracts\Translation\TranslatorInterface
     */
    protected $translator;
    /**
     * @var \PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings
     */
    protected $settings;
    /**
     * @var array
     */
    protected $product;
    /**
     * @var \Language
     */
    protected $language;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\HookManager
     */
    protected $hookManager;
    /**
     * @var \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected $configuration;
    public function __construct(\PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings, array $product, \Language $language, \PrestaShop\PrestaShop\Adapter\Image\ImageRetriever $imageRetriever, \Link $link, \PrestaShop\PrestaShop\Adapter\Product\PriceFormatter $priceFormatter, \PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever $productColorsRetriever, \Symfony\Contracts\Translation\TranslatorInterface $translator, ?\PrestaShop\PrestaShop\Adapter\HookManager $hookManager = null, ?\PrestaShop\PrestaShop\Adapter\Configuration $configuration = null)
    {
    }
    /**
     * @return mixed
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getId()
    {
    }
    /**
     * @return array|mixed
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getAttributes()
    {
    }
    /**
     * Returns information, if a customization is required to purchase this product.
     *
     * @return bool
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getCustomizationRequired()
    {
    }
    /**
     * @return bool
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getShowPrice()
    {
    }
    /**
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getWeightUnit()
    {
    }
    /**
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getUrl()
    {
    }
    /**
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getLink()
    {
    }
    /**
     * Get the short description converted to readable plain text.
     *
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getDescriptionShortText(): string
    {
    }
    /**
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getCanonicalUrl()
    {
    }
    /**
     * @return string|null
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getAddToCartUrl()
    {
    }
    /**
     * @return array|bool
     *
     * @throws \Symfony\Component\Translation\Exception\InvalidArgumentException
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getCondition()
    {
    }
    /**
     * @return string|null
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getDeliveryInformation()
    {
    }
    /**
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getEmbeddedAttributes()
    {
    }
    /**
     * @return string|null
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getFileSizeFormatted()
    {
    }
    /**
     * @return array
     *
     * @throws \ReflectionException
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getAttachments()
    {
    }
    /**
     * @return array|mixed
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getQuantityDiscounts()
    {
    }
    /**
     * @return mixed|null
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getReferenceToDisplay()
    {
    }
    /**
     * Returns all product features, not grouped yet for performance reasons.
     *
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getFeatures()
    {
    }
    /**
     * Returns all product feature values nicely grouped by feature name.
     *
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getGroupedFeatures()
    {
    }
    /**
     * See following resources for up-to-date information
     * https://support.google.com/merchants/answer/6324448
     * https://schema.org/ItemAvailability
     *
     * @return string
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getSeoAvailability()
    {
    }
    /**
     * @return array
     *
     * @throws \Symfony\Component\Translation\Exception\InvalidArgumentException
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getLabels()
    {
    }
    /**
     * @return array|null
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getEcotax()
    {
    }
    /**
     * @return string|null
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getManufacturerName()
    {
    }
    /**
     * @return string|null
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getCategory()
    {
    }
    /**
     * @return string|null
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getCategoryName()
    {
    }
    /**
     * @return bool
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getVirtual()
    {
    }
    /**
     * @return int
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getNew()
    {
    }
    /**
     * @return array
     *
     * @throws \Symfony\Component\Translation\Exception\InvalidArgumentException
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getFlags()
    {
    }
    /**
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getMainVariants()
    {
    }
    /**
     * Returns combination specific data, if assigned. This function should be rewritten because it
     * loads the data from the first attribute found. See ProductController for more info.
     *
     * Also, on product page, $this->product['attributes'] contains a list of combinations, while in cart
     * it contains only attribute pairs like Color-Black etc.
     *
     * @return array|null
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getCombinationSpecificData()
    {
    }
    /**
     * This function returns current combination references, if set.
     * Otherwise, it returns the base product references.
     *
     * @return array|null
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getSpecificReferences()
    {
    }
    /**
     * Prices should be shown for products with active "Show price" option
     * and customer groups with active "Show price" option.
     *
     * @param \PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings
     * @param array $product
     *
     * @return bool
     */
    protected function shouldShowPrice(\PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings, array $product): bool
    {
    }
    /**
     * @param array $product
     *
     * @return bool
     */
    protected function shouldShowOutOfStockLabel(\PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings, array $product): bool
    {
    }
    /**
     * @param array $product
     * @param \Language $language
     */
    protected function fillImages(array $product, \Language $language): void
    {
    }
    /**
     * @param array $images
     * @param int $productAttributeId
     *
     * @return array
     */
    protected function filterImagesForCombination(array $images, int $productAttributeId)
    {
    }
    /**
     * Method that prepares all pricing information to use. Most prices are provided in the default tax configuration,
     * but also in tax-excluded and tax-included formats, making them easy to display as needed. B2B shops usually
     * present most of the prices in tax-excluded format primarily.
     *
     * @param \PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings
     * @param array $product
     */
    protected function addPriceInformation(\PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings, array $product): void
    {
    }
    /**
     * @return float
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getRoundedDisplayPrice()
    {
    }
    /**
     * @param array $product
     * @param \PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings
     *
     * @return bool
     */
    protected function shouldEnableAddToCartButton(array $product, \PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings)
    {
    }
    /**
     * Gets the quantity wanted by the customer for the product. We will take his request,
     * but we will adjust it if it's lower than the required quantity.
     *
     * @return int Quantity of product requested by the customer, altered if needed, always a positive integer
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getQuantityWanted()
    {
    }
    /**
     * Gets the minimal quantity the customer has to purchase. We cannot just let him buy 1 piece
     * if the minimal quantity is higher. Also, we adjust it by the quantity already in cart.
     *
     * @return int Minimal quantity of product the customer buy right now, always a positive integer
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getQuantityRequired()
    {
    }
    /**
     * Gets the minimal quantity allowed for the product or its combination. With no adjustments
     * by the current context. The builder of this object is responsible for passing the correct
     * minimal quantity depending on the combination selected.
     *
     * @return int Minimal quantity of product from it's settings, always a positive integer
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getMinimalQuantity()
    {
    }
    /**
     * {@inheritdoc}
     *
     * @param array $product
     * @param \Language $language
     * @param bool $canonical
     *
     * @return string
     */
    protected function getProductURL(array $product, \Language $language, $canonical = false)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings
     * @param array $product
     * @param \Language $language
     */
    public function addQuantityInformation(\PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings, array $product, \Language $language)
    {
    }
    /**
     * Returns extra price associated with current combination, if provided
     *
     * @return float
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getAttributePrice()
    {
    }
    /**
     * Validates and formats available_date property passed into the lazy array.
     * It will return the date back only if it's a valid date in the future.
     * Also handles the case when the date was not passed at all.
     *
     * @param array $product
     *
     * @return string|null
     */
    protected function prepareAvailabilityDate($product)
    {
    }
    /**
     * @param string $key
     *
     * @return string
     */
    protected function getTranslatedKey($key)
    {
    }
    /**
     * @return array
     */
    protected function getProductAttributeWhitelist()
    {
    }
    /**
     * Assemble the same features in one array.
     *
     * @param array $productFeatures
     *
     * @return array
     */
    protected function buildGroupedFeatures(array $productFeatures)
    {
    }
}
