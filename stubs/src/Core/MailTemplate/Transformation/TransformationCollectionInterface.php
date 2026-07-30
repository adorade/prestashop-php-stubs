<?php

namespace PrestaShop\PrestaShop\Core\MailTemplate\Transformation;

/**
 * TransformationCollectionInterface contains a list of transformations applied
 * on mail templates when they are generated.
 */
interface TransformationCollectionInterface extends \IteratorAggregate, \Countable
{
    /**
     * @param TransformationInterface $transformation
     *
     * @return bool
     */
    public function contains($transformation);
    /**
     * @param TransformationInterface $transformation
     */
    public function add($transformation);
    /**
     * @param TransformationInterface $transformation
     */
    public function remove($transformation);
}
