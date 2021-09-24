<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run()
    {
        $date = Carbon::now();
        $data = array(
            'name' => 'PenaSuperAdmin',
            'username' => 'pena2017',
            'password' => Hash::make('penc3787'),
            'created_at' => $date,
            'updated_at' => $date,
        );
        User::create($data);
    }
}
