<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(\Database\Seeders\CategorySeeder::class);
        $this->call(\Database\Seeders\CommentSeeder::class);
        $this->call(\Database\Seeders\ContactSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(PhoneSeeder::class);
        $this->call(\Database\Seeders\PostSeeder::class);
        $this->call(product::class);
        $this->call(RoleUserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ShareSeeder::class);
        $this->call(TaggableSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(\Database\Seeders\UserSeeder::class);
//        $this->call(VideoSeeder::class);
    }

}
