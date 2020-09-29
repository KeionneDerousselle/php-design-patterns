<?php

use App\Customer;
use App\CustomerIsGold;
use App\CustomersRepository;
use PHPUnit\Framework\TestCase;

/** @covers CustomersRepository */
class CustomersRepositoryTest extends TestCase
{
    protected $customers;

    public function setUp(): void
    {
        $this->customers = new CustomersRepository([
            new Customer('gold'),
            new Customer('bronze'),
            new Customer('silver'),
            new Customer('gold')
        ]);
    }
    
    /** @test */
    public function it_should_fetch_all_customers()
    {
        $this->assertCount(4, $this->customers->all());
    }

    /** @test */
    public function it_should_fetch_all_customer_who_math_a_given_specification()
    {
        $this->assertCount(2, $this->customers->bySpecification(new CustomerIsGold));
    }
}
