<?php
namespace App;

class CustomersRepository
{
    public function all()
    {
        return Customer::all();
    }

    public function bySpecification($spec)
    {
        $customers = $spec->asScope(Customer::query());

        return $customers->get();
    }
}
