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
        // $this->call(UsersTableSeeder::class);

    	DB::table('admins')->insert([
    		'full_name'=>'Mr Admin',
    		'email'=>'superadmin@gmail.com',
    		'password'=>'$2y$12$zDxTe98GUOICr7JFniYehOb.HB6RVA6TwI6dCVovOPph7AyWAIZ2O',
    		'admin_id'=>12345,
            'admin_state'=>"superadmin",

    	]);


        DB::table('soft_company')->insert([
            'name'=>"Cloud Icon",
            'location'=>'House#160, 5th Floor, Lake Circus,
                Kalabagan,Dhanmondi, Dhaka-1205.'
        ]);

    }
}
