<?php

use Illuminate\Database\Seeder;
use App\Blog;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /* $faker = Faker::create();
        foreach (range(1, 20) as $index){
            DB::table('blogs')->insert([
               'name' => $faker->name,
               'email' => $faker->email,
               'password' => bcrypt('secret'),
            ]);
        } */
    }
}
