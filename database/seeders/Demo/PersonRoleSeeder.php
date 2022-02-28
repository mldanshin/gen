<?php

namespace Database\Seeders\Demo;

use App\Models\Eloquent\PersonRole;
use Illuminate\Database\Seeder;

class PersonRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->create(20, 1);
        $this->create(21, 3);
    }

    private function create(int $person, int $role): void
    {
        PersonRole::create([
            "person_id" => $person,
            "role_id" => $role,
        ]);
    }
}
