<?php
declare(strict_types=1);

namespace InventoryCosts\Tests;

use Faker\Factory;
use Faker\Provider\Base;
use PHPUnit\Framework\TestCase;

class InventoryCosts extends TestCase
{
    /**
     * @var array
     */
    protected $goodsItem;
    protected $faker;
    public function setUp()
    {
        parent::setUp();
        $this->faker = Factory::create('zh_CN');
        $this->goodsItem = ['name' => Base::randomAscii(), 'num' => random_int(1, 999999),
            'price' => Base::randomFloat(4, 0)];
    }
}
