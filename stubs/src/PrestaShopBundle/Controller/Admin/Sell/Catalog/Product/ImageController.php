<?php

namespace PrestaShopBundle\Controller\Admin\Sell\Catalog\Product;

class ImageController extends \PrestaShopBundle\Controller\Admin\PrestaShopAdminController
{
    public static function getSubscribedServices(): array
    {
    }
    /**
     * Retrieves images for all shops, but the cover (which is multi-shop compatable) is retrieved based on $shopId
     *
     * @param int $productId
     * @param int $shopId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller'))", message: 'You do not have permission to update this.')]
    public function getImagesForShopAction(int $productId, int $shopId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param int $productId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('read', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to red or update this.')]
    public function productShopImagesAction(int $productId, \Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to update this.')]
    public function addImageAction(
        \Symfony\Component\HttpFoundation\Request $request,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.product_image_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $productImageFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.product_image_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $productImageFormHandler
    ): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param int $productImageId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('update', request.get('_legacy_controller'))", message: 'You do not have permission to update this.')]
    public function updateImageAction(
        \Symfony\Component\HttpFoundation\Request $request,
        int $productImageId,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.builder.product_image_form_builder')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface $productImageFormBuilder,
        #[\Symfony\Component\DependencyInjection\Attribute\Autowire(service: 'prestashop.core.form.identifiable_object.product_image_form_handler')]
        \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface $productImageFormHandler
    ): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
    /**
     * @param int $productImageId
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    #[\PrestaShopBundle\Security\Attribute\AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to update this.')]
    public function deleteImageAction(int $productImageId): \Symfony\Component\HttpFoundation\JsonResponse
    {
    }
}
