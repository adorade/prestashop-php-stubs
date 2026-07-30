<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Product;

/**
 * @property string $availability_message
 */
class ProductLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\AbstractLazyArray
{
    /**
     * @var ProductPresentationSettings
     */
    protected $settings;
    /**
     * @var array
     */
    protected $product;
    public function __construct(\PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings, array $product, \Language $language, \PrestaShop\PrestaShop\Adapter\Image\ImageRetriever $imageRetriever, \Link $link, \PrestaShop\PrestaShop\Adapter\Product\PriceFormatter $priceFormatter, \PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever $productColorsRetriever, \Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager = null, \PrestaShop\PrestaShop\Adapter\Configuration $configuration = null)
    {
    }
    /**
     * @arrayAccess
     *
     * @return mixed
     */
    public function getId()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array|mixed
     */
    public function getAttributes()
    {
    }
    /**
     * @arrayAccess
     *
     * @return bool
     */
    public function getShowPrice()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string
     */
    public function getWeightUnit()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string
     */
    public function getUrl()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string
     */
    public function getCanonicalUrl()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string|null
     */
    public function getAddToCartUrl()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array|bool
     *
     * @throws InvalidArgumentException
     */
    public function getCondition()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string|null
     */
    public function getDeliveryInformation()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     */
    public function getEmbeddedAttributes()
    {
    }
    /**
     * @arrayAccess
     *
     * @return string|null
     */
    public function getFileSizeFormatted()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     *
     * @throws \ReflectionException
     */
    public function getAttachments()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array|mixed
     */
    public function getQuantityDiscounts()
    {
    }
    /**
     * @arrayAccess
     *
     * @return mixed|null
     */
    public function getReferenceToDisplay()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array|null
     */
    public function getGroupedFeatures()
    {
    }
    /**
     * See following resources for up-to-date information
     * https://support.google.com/merchants/answer/6324448
     * https://schema.org/ItemAvailability
     *
     * @arrayAccess
     *
     * @return string
     */
    public function getSeoAvailability()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     *
     * @throws InvalidArgumentException
     */
    public function getLabels()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array|null
     */
    public function getEcotax()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     *
     * @throws InvalidArgumentException
     */
    public function getFlags()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     */
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
     * @arrayAccess
     *
     * @return array|null
     */
    public function getCombinationSpecificData()
    {
    }
    /**
     * This function returns current combination references, if set.
     * Otherwise, it returns the base product references.
     *
     * @arrayAccess
     *
     * @return array|null
     */
    public function getSpecificReferences()
    {
    }
    /**
     * @param array $product
     * @param ProductPresentationSettings $settings
     *
     * @return bool
     */
    protected function shouldEnableAddToCartButton(array $product, \PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings)
    {
    }
    /**
     * @param ProductPresentationSettings $settings
     * @param array $product
     * @param Language $language
     */
    public function addQuantityInformation(\PrestaShop\PrestaShop\Core\Product\ProductPresentationSettings $settings, array $product, \Language $language)
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
