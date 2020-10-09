<?php
use Illuminate\Database\Capsule\Manager as DB;
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
        $this->establishDatabaseConnection();
        $this->migrateTables();
        $this->customers = new CustomersRepository;
    }

    protected function establishDatabaseConnection()
    {
        $database = new DB;
        $database->addConnection([
            'driver' => 'sqlite',
            'database' => ':memory:'
        ]);

        $database->bootEloquent();
        $database->setAsGlobal();
    }
    
    protected function migrateTables()
    {
        DB::schema()->create('customers', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('plan');
            $table->timestamps();
        });

        Customer::create(['name' => 'Joe', 'plan' => 'gold']);
        Customer::create(['name' => 'Jane', 'plan' => 'silver']);
    }

    /** @test */
    public function it_should_fetch_all_customers()
    {
        $this->assertCount(2, $this->customers->all());
    }

    /** @test */
    public function it_should_fetch_all_customer_who_match_a_given_specification()
    {
        $this->assertCount(1, $this->customers->bySpecification(new CustomerIsGold));
    }
}
