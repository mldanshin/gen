<?php

namespace Tests\Feature\Support;

use App\Models\Eloquent\People as PeopleEloquentModel;
use App\Support\PhotoSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

final class PhotoSeederTest extends TestCase
{
    use DatabaseMigrations;
    use RefreshDatabase;

    public function testCreate(): void
    {
        $this->assertInstanceOf(PhotoSeeder::class, new PhotoSeeder(Storage::fake("public")));
        $this->assertInstanceOf(PhotoSeeder::class, PhotoSeeder::getInstance());
    }

    public function testRun(): void
    {
        $this->seed();

        $disk = Storage::fake("public");
        $seeder = new PhotoSeeder($disk);
        $seeder->run();

        $people = PeopleEloquentModel::has("photo")->get();
        foreach ($people as $person) {
            $this->assertDirectoryExists($disk->path("photo/" . $person->id));

            $photoCollection = $person->photo()->get();
            foreach ($photoCollection as $photo) {
                $this->assertFileExists($disk->path("photo/" . $person->id . "/" . $photo->file));
            }
        }
    }
}
