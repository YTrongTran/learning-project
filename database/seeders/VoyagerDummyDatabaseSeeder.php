<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VoyagerDummyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            UsersTableSeeder::class,
            PostsTableSeeder::class,
            PagesTableSeeder::class,
            TranslationsTableSeeder::class,
            PermissionRoleTableSeeder::class,
<<<<<<< HEAD
=======
<<<<<<< HEAD
            
=======
>>>>>>> 71f9ff227d590b0cc825600325f4a09568780409
>>>>>>> 7d8ca2440c1d0686d9d66a8c77d1b5adc9bf6331
        ]);
    }
}
