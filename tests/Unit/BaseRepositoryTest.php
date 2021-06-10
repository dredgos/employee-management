<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Repository\BaseRepository\BaseRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BaseRepositoryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_get_all_method()
    {
        $user = User::create([
        'email' => 'sam@hotmail.com',
        'password' => 'Secret1234!',
        'first_name' => 'Sam',
        'last_name' => 'Smith',
        'date_of_birth' => 12-01-1988,
        'telephone' => '02079888768',
        'address_1' => 'Flat 1',
        'address_2' => 'Anchor House',
        'town' => 'Kingston',
        'postcode' => 'KE4 6HA',
        'join_date' => 22-01-2020,
        'salary' => 30000,
        ]);

        $repo = new BaseRepository($user);

        $usersFromDb = $repo->getAll();

        $this->assertSame($user, $usersFromDb);
    }


    public function test_get_by_id_method()
    {
        $this->assertTrue(true);
    }

    public function test_create_method()
    {
        $this->assertTrue(true);
    }

    public function test_update_method()
    {
        $this->assertTrue(true);
    }

    public function test_delete_method()
    {
        $this->assertTrue(true);
    }
}
