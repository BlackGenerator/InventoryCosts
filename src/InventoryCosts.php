<?php
declare(strict_types=1);

namespace InventoryCosts;

/**
 * 库存成本
 * Class InventoryCosts
 * @package InventoryCosts
 */
interface InventoryCosts
{
    /**
     * 库存总成本
     */
    public function totalInventoryCost();
}
