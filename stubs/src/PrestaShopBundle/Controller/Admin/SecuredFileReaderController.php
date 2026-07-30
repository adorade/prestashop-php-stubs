<?php

namespace PrestaShopBundle\Controller\Admin;

/*
 * For security purpose, this controller allow you to securely display documents
 */
class SecuredFileReaderController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    /**
     * @param string $uploadDir
     */
    public function __construct(string $uploadDir)
    {
    }
    /**
     * @throws PrestaShopException
     */
    public function readUploadDocument(\Symfony\Component\HttpFoundation\Request $request): \Symfony\Component\HttpFoundation\Response
    {
    }
}
