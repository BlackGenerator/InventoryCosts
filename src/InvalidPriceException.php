<?php
declare(strict_types=1);

namespace InventoryCosts;

class InvalidPriceException extends \Exception
{
    protected $message = '无效的价格';
}
