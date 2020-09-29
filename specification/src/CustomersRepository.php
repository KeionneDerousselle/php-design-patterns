<?php
namespace App;

class CustomersRepository
{
    protected $customers = [];

    public function __construct(array $customers)
    {
        $this->customers = $customers;
    }

    public function all()
    {
        return $this->customers;
    }

    public function bySpecification($spec)
    {
        return array_filter($this->customers, fn ($c) => $spec->isSatisfiedBy($c));
    }
}
