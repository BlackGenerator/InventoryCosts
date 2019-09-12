<?php

namespace InventoryCosts\Tests;

use InventoryCosts\AllWeightedAverage;
use Faker\Factory;
use Faker\Provider\Base;
use PHPUnit\Framework\TestCase;

class AllWeightedAverageTest extends TestCase
{
    /**
     * @var array
     */
    protected $goodsItem;
    /**
     * @var \Faker\Generator
     */
    protected $faker;
    /**
     * @var AllWeightedAverage
     */
    protected $plan;

    public function setUp()
    {
        parent::setUp();
        $this->faker = Factory::create('zh_CN');
        $this->goodsItem = ['name' => Base::randomAscii(), 'num' => random_int(1, 999999),
            'price' => Base::randomFloat(4, 0)];
        $this->plan = new AllWeightedAverage();
    }

    /**
     * 测试无效的价格
     * @expectedException \InventoryCosts\InvalidPriceException
     * @expectedExceptionMessage 无效的价格
     */
    public function testInvalidPrice()
    {
        $this->plan->purchaseGoods(Base::randomAscii(), random_int(1, 999999), Base::randomAscii());
    }

}
