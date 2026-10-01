<?php

namespace PrestaShopBundle\Utils;

class Tree
{
    /**
     * @param array $elementlist
     * @param callable $getChildren; must return an array of children for the given element; signature function($element): array
     * @param callable $getId; must return the id of the given element; signature function($element): int
     * @param array $idStorage; store found ids (ensure recursion optimisation and avoiding infinite loop)
     *
     * @return array [ (int) 'id' => (int) 'id'] (make array construction easier)
     */
    public static function extractChildrenId(array $elementlist, callable $getChildren, callable $getId, array &$idStorage = []): array
    {
    }
}
