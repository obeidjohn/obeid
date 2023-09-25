<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('username','superadmin')->first();
        if(is_null($admin)){
            $admin= new User();
            $admin->name='admin';
            $admin->email='admin@gmail.com';
            $admin->username = 'superadmin';
            $admin->password = Hash::make('admin@123');
            $admin->save();
        }
    }
}
