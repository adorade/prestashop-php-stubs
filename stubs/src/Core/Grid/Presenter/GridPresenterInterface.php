<?php

namespace PrestaShop\PrestaShop\Core\Grid\Presenter;

/**
 * Interface GridPresenterInterface defines contract for grid presenter.
 */
interface GridPresenterInterface
{
    /**
     * Present grid as plain array.
     *
     * @param GridInterface $grid
     *
     * @return array
     */
    public function present(\PrestaShop\PrestaShop\Core\Grid\GridInterface $grid);
}
