<?php

namespace Database\Seeders\Demo;

use App\Models\Eloquent\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->create(1, 20, "admin");
        $this->create(2, 21, "user");
    }

    private function create(int $id, int $person_id, string $password): void
    {
        $user = new User();
        $user->id = $id;
        $user->person_id = $person_id;
        $user->password = Hash::make($password);
        $user->save();
    }
}
