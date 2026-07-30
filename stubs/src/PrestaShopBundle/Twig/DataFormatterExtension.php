<?php

namespace PrestaShopBundle\Twig;

/**
 * This class is used by Twig_Environment and provide some methods callable from a twig template.
 */
class DataFormatterExtension extends \Twig\Extension\AbstractExtension
{
    /**
     * Define available filters.
     *
     * @return array Twig_SimpleFilter
     */
    public function getFilters()
    {
    }
    /**
     * Define available functions.
     *
     * @return array Twig_SimpleFunction
     */
    public function getFunctions()
    {
    }
    /**
     * Cast to array the variable given.
     *
     * @param mixed $toCast Mixed value to be casted into an array
     *
     * @return array $toCast casted in array
     */
    public function arrayCast($toCast)
    {
    }
    /**
     * Cast to int the variable given.
     *
     * @param mixed $toCast Mixed value to be casted into an int
     *
     * @return int $toCast casted in int
     */
    public function intCast($toCast)
    {
    }
    /**
     * PHP 'unset()' exposed through twig template engine.
     *
     * @param array $array Array containing Element to unset
     * @param string $key Element to be unset
     */
    public function unsetElement($array, $key)
    {
    }
    /**
     * Extract a subset of an array and returns only the wanted keys.
     * If $extractedKeys is an associative array you can even rename the
     * keys of the extracted array.
     *
     * ex:
     *  arrayPluck(['first_name' => 'John', 'last_name' => 'Doe'], ['first_name']) => ['first_name' => 'John']
     *  arrayPluck(['first_name' => 'John', 'last_name' => 'Doe'], ['first_name' => 'name']) => ['name' => 'John']
     *
     * @param array $array
     * @param array $extractedKeys
     *
     * @return array
     */
    public function arrayPluck(array $array, array $extractedKeys)
    {
    }
    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
    }
}
