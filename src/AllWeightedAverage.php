<?php
declare(strict_types=1);

namespace InventoryCosts;

/**
 * 全部加权平均
 * Class AllWeightedAverage
 * @package InventoryCosts
 */
class AllWeightedAverage implements InventoryCosts
{
    use PurchasingHistory;
    /**
     * 库存总成本
     */
    public function totalInventoryCost()
    {

    }
}
