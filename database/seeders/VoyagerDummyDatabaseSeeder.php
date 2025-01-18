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
>>>>>>> 71f9ff227d590b0cc825600325f4a09568780409
        ]);
    }
}
