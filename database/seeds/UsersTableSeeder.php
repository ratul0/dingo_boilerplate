<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class,10)->create()->each(function ($u){
            $u->assign(config('cons.roles.user'));
        });
    }
}
