<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //$this->call(UserTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Mario',
            'email' => 'laserna.mario@gmail.com',
            'password' => bcrypt('123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        Model::reguard();
    }
}
