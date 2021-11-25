<?php

namespace InventoryCosts\Tests;

use InventoryCosts\AllWeightedAverage;
use Poppy\Faker\Factory;
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
        $this->goodsItem = ['name' => $this->faker->randomLetter(), 'num' => random_int(1, 999999),
            'price' => $this->faker->randomFloat(4, 0)];
        $this->plan = new AllWeightedAverage();
    }

    /**
     * 测试无效的价格
     * @expectedException \InventoryCosts\InvalidPriceException
     * @expectedExceptionMessage 无效的价格
     */
    public function testInvalidPrice()
    {
        $this->plan->purchaseGoods($this->faker->randomLetter(), random_int(1, 999999), $this->faker->randomLetter());
    }

}
