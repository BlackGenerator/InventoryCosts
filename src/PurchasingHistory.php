<?php

declare(strict_types=1);

namespace InventoryCosts;

/**
 * 采购历史
 * Trait PurchasingHistory
 * @package InventoryCosts
 */
trait PurchasingHistory
{
    /**
     * @var array 商品
     */
    protected $goodsItem;

    /** 采购商品
     * @param string $goodsName 商品名称
     * @param int $goodsNum 商品数量
     * @param string $goodsPrice 商品价格
     * @throws InvalidPriceException
     */
    public function purchaseGoods(string $goodsName, int $goodsNum, string $goodsPrice)
    {
        if ($this->checkPrice($goodsPrice)) {
            $this->goodsItem[] = ['name' => $goodsName, 'num' => $goodsNum, 'price' => $goodsPrice];
        } else {
            throw new InvalidPriceException();
        }
    }

    /**
     *  检查价格
     * @param string $data
     * @return bool
     */
    private function checkPrice(string $data):bool
    {
        return is_numeric($data) ? true : false;
    }
}
