<?php

use App\Customer;
use App\CustomerIsGold;
use PHPUnit\Framework\TestCase;

/** @covers CustomerIsGold */
class CustomerIsGoldTest extends TestCase
{
    /** @test */
    public function it_should_return_that_a_customer_is_gold()
    {
        $goldCustomer = new Customer('gold');
        $specification = new CustomerIsGold();
        
        $this->assertTrue($specification->isSatisfiedBy($goldCustomer));
    }
}
