<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'firstname' => 'Juan',
                'middlename' => 'Dela',
                'lastname' => 'Cruz',
                'username' => 'Administrator',
                'email' => 'mail@mail.com',
                'email_verified_at' => NULL,
                'admin' => 1,
                'password' => '$2y$10$7PvY4WATw69gQ5kGnrUGI.sjR1UDJnZghO1b8/VVNc2cEhN80P2qK',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}