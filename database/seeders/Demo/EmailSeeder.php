<?php

namespace Database\Seeders\Demo;

use App\Models\Eloquent\Email;
use Illuminate\Database\Seeder;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->create(1, 5, 'example@fakemail.nets');
        $this->create(2, 6, 'natali@fakemail.rus');
        $this->create(3, 7, 'den@fakemail.rus');
        $this->create(4, 9, 'oks@fakemail.rus');
        $this->create(5, 10, 'bilet@fakemail.rus');
        $this->create(6, 11, 'bulbul@fakemail.rus');
        $this->create(7, 12, 'oleg@fakemail.rus');
        $this->create(8, 16, 'max@fakemail.rus');
        $this->create(9, 18, 'igor@fakemail.rus');
        $this->create(10, 20, 'admin@fake.rus');
        $this->create(11, 21, 'user@fake.rus');
    }

    private function create(int $id, int $person, string $name): void
    {
        $phone = new Email();
        $phone->id = $id;
        $phone->person_id = $person;
        $phone->name = $name;
        $phone->save();
    }
}
