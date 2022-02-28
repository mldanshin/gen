<?php

namespace App\Support;

use App\Models\Eloquent\People as PeopleEloquentModel;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

final class PhotoSeeder
{
    public function __construct(private Filesystem $disk)
    {
    }

    public static function getInstance(): self
    {
        return new self(Storage::disk("public"));
    }

    public function run(): bool
    {
        try {
            $this->createDirectory();
            $people = PeopleEloquentModel::has("photo")->get();
            $this->createFile($people, $this->disk->path("photo"));
            return true;
        } catch (\Exception) {
            return false;
        }
    }

    private function createDirectory(): void
    {
        if (File::exists($this->disk->path("photo"))) {
            File::deleteDirectory($this->disk->path("photo"));
        }

        if (File::exists($this->disk->path("photo_temp"))) {
            File::deleteDirectory($this->disk->path("photo_temp"));
        }

        File::makeDirectory($this->disk->path("photo"));
        File::makeDirectory($this->disk->path("photo_temp"));
    }

    /**
     * @param Collection|PeopleEloquentModel[] $people
     */
    private function createFile(Collection $people, string $path): void
    {
        $pathTestImage = $this->getPathImage();

        foreach ($people as $person) {
            File::makeDirectory("$path/$person->id");
            $photo = $person->photo()->get();
            foreach ($photo as $item) {
                File::copy($pathTestImage, $path . "/" . $person->id . "/" . $item->file);
            }
        }
    }

    private function getPathImage(): string
    {
        return base_path("storage/framework/testing/test.png");
    }
}
