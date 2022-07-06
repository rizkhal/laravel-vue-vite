<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Passion;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Hukum', 'Politik', 'Agama', 'Balapan'];
        collect($categories)->each(fn ($v) => Category::create(['name' => $v]));

        Passion::factory(20)->create();
    }
}
