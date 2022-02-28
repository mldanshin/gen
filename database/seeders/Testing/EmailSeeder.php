<?php

namespace Database\Seeders\Testing;

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
        $this->create(1, 5, 'mail@danshin.net');
        $this->create(2, 6, 'natali@fakemail.ru');
        $this->create(3, 7, 'den@fakemail.ru');
        $this->create(4, 9, 'oks@fakemail.ru');
        $this->create(5, 10, 'bilet@fakemail.ru');
        $this->create(6, 11, 'bulbul@fakemail.ru');
        $this->create(7, 12, 'oleg@fakemail.ru');
        $this->create(8, 16, 'max@fakemail.ru');
        $this->create(9, 18, 'igor@fakemail.ru');
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
