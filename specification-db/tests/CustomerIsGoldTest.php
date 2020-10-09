<?php

use App\Customer;
use App\CustomerIsGold;
use PHPUnit\Framework\TestCase;

/** @covers CustomerIsGold */
class CustomerIsGoldTest extends TestCase
{
    /** @test */
    public function it_should_return_true_when_a_customer_is_gold()
    {
        $goldCustomer = new Customer(['plan' => 'gold']);
        $specification = new CustomerIsGold();
        
        $this->assertTrue($specification->isSatisfiedBy($goldCustomer));
    }

    /** @test */
    public function it_should_return_false_when_a_customer_is_not_gold()
    {
        $goldCustomer = new Customer(['plan' => 'silver']);
        $specification = new CustomerIsGold();
        
        $this->assertFalse($specification->isSatisfiedBy($goldCustomer));
    }
}
