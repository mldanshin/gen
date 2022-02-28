<?php

namespace Database\Seeders;

use Database\Seeders\Demo\EmailSeeder;
use Database\Seeders\Demo\GenderSeeder;
use Database\Seeders\Demo\MarriageSeeder;
use Database\Seeders\Demo\MarriageRoleGenderSeeder;
use Database\Seeders\Demo\MarriageRoleScopeSeeder;
use Database\Seeders\Demo\MarriageRoleSeeder;
use Database\Seeders\Demo\OldSurnameSeeder;
use Database\Seeders\Demo\ParentChildSeeder;
use Database\Seeders\Demo\ParentRoleGenderSeeder;
use Database\Seeders\Demo\ParentRoleSeeder;
use Database\Seeders\Demo\PeopleSeeder;
use Database\Seeders\Demo\PersonRoleSeeder;
use Database\Seeders\Demo\UserSeeder;
use Database\Seeders\Demo\UserRoleSeeder;
use Database\Seeders\Demo\UserIdentifierSeeder;
use App\Models\Eloquent\Photo;
use Illuminate\Database\Seeder;

class DatabaseSeederDemo extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GenderSeeder::class,
            MarriageRoleSeeder::class,
            MarriageRoleGenderSeeder::class,
            MarriageRoleScopeSeeder::class,
            ParentRoleSeeder::class,
            ParentRoleGenderSeeder::class,
            PeopleSeeder::class,
            OldSurnameSeeder::class,
            ParentChildSeeder::class,
            MarriageSeeder::class,
            UserRoleSeeder::class,
            PersonRoleSeeder::class,
            UserIdentifierSeeder::class,
            EmailSeeder::class,
            UserSeeder::class
        ]);

        Photo::factory()->count(10)->create();
    }
}
