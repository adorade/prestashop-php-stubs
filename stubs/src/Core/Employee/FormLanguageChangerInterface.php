<?php

namespace PrestaShop\PrestaShop\Core\Employee;

/**
 * Interface FormLanguageSwitcherInterface describes an employee form language changer.
 */
interface FormLanguageChangerInterface
{
    /**
     * Change employee form language to given one and save the selection in the cookies.
     *
     * @param string $languageIsoCode two letter iso code of the language
     */
    public function changeLanguageInCookies($languageIsoCode);
}
